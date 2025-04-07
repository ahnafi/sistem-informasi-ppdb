<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(): \Illuminate\Http\Response
    {
        return response()->view('pages.registration.index');
    }

    public function registration(): \Illuminate\Http\RedirectResponse
    {
        // logic here
        return back()->with("success", "Registration Successful");
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

}
