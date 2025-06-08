<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationCreateRequest;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
    public function index(): \Illuminate\Http\Response
    {
        return response()->view('pages.registration.index');
    }

    public function check(): \Illuminate\Http\Response
    {
        return response()->view("pages.registration.check");
    }

    public function checkResult(Request $request): \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
    {
        $nisn = $request->query('nisn', null);

        if (!$nisn) {
            return back()->with("error", "Anda tidak terdaftar.");
        }

        $registration = Registration::where("nisn", $nisn)->first();

        if (!$registration) {
            return back()->with("error", "Anda tidak terdaftar.");
        }

        return match ($registration->status) {
            "accepted" => response()->view("pages.registration.accepted", ["data" => $registration]),
            "rejected" => response()->view("pages.registration.rejected", ["data" => $registration]),
            "pending" => back()->with("error", "Data anda sedang diproses"),
            default => back()->with("error", "Status tidak diketahui."),
        };
    }

    public function form(): \Illuminate\Http\Response
    {
        return response()->view("pages.registration.form");
    }

    public function formStore(RegistrationCreateRequest $request): \Illuminate\Http\RedirectResponse
    {
        try {
            DB::beginTransaction();
            
            // logic to store the registration form data
            $data = $request->validated();
            
            Log::info('Registration data received:', $data);

            // 1. Simpan data registrasi utama
            $registration = Registration::create([
                'email' => $data['email'],
                'name' => $data['name'],
                'gender' => $data['gender'],
                'place_of_birth' => $data['place_of_birth'],
                'date_of_birth' => $data['date_of_birth'],
                'village_district_province' => $data['village_district_province'],
                'address' => $data['address'],
                'phone' => $data['phone'],
                'nisn' => $data['nisn'],
                'origin_school' => $data['origin_school'],
                'school_type' => $data['school_type'],
                'information' => $data['information'],
                'status' => 'pending',
            ]);

            Log::info('Registration created with ID: ' . $registration->id);

            // 2. Simpan data periodik
            if (!empty($data["periodic"])) {
                $periodic = $registration->periodic()->create($data['periodic']);
                Log::info('Periodic data created: ' . $periodic->id);
            }

            // 3. Simpan data prestasi (jika ada)
            if (!empty($data['achievements'])) {
                foreach ($data['achievements'] as $achievement) {
                    // Filter out empty achievements
                    if (!empty($achievement['name'])) {
                        $achievementRecord = $registration->achievements()->create($achievement);
                        Log::info('Achievement created: ' . $achievementRecord->id);
                    }
                }
            }

            // 4. Simpan data wali (bisa lebih dari satu)
            if (!empty($data['parents'])) {
                foreach ($data['parents'] as $parent) {
                    // Filter out empty parents (untuk wali yang opsional)
                    if (!empty($parent['name'])) {
                        $parentRecord = $registration->studentParents()->create($parent);
                        Log::info('Parent created: ' . $parentRecord->id);
                    }
                }
            }
            
            DB::commit();

            return redirect()->route('registration.form')->with("success", "Pendaftaran berhasil disimpan! NISN Anda: " . $data['nisn']);
            
        } catch (\Exception $e) {
            DB::rollback();
            Log::error('Registration submission error: ' . $e->getMessage());
            Log::error('Stack trace: ' . $e->getTraceAsString());
            return back()->withInput()->with("error", "Terjadi kesalahan saat menyimpan data: " . $e->getMessage());
        }
    }

}
