<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationCreateRequest;
use App\Models\Registration;
use Illuminate\Http\Request;

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
        // logic to store the registration form data
        $data = $request->validated();

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
            'information' => $data['information'] ?? null,
        ]);

        // 2. Simpan data periodik
        if (!empty($data["periodic"])) {
            $registration->periodic()->create($data['periodic']);
        }

        // 3. Simpan data prestasi (jika ada)
        if (!empty($data['achievements'])) {
            foreach ($data['achievements'] as $achievement) {
                $registration->achievements()->create($achievement);
            }
        }

        // 4. Simpan data wali (bisa lebih dari satu)
        if (!empty($data['parents'])) {
            foreach ($data['parents'] as $parent) {
                $registration->parents()->create($parent);
            }
        }

        return back()->with("success", "Form submitted successfully");
    }

}
