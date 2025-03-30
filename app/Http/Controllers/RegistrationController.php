<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        return response()->view('registration/index');
    }

    public function registration(): \Illuminate\Http\RedirectResponse
    {
        // logic here
        return back()->with("success", "Registration Successful");
    }
}
