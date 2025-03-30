<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return response()->view('home');
    }

    public function about()
    {
        return response()->view('about');
    }

    public function contact()
    {
        return response()->view('contact');
    }

    public function sendContact(): \Illuminate\Http\RedirectResponse
    {
        return back()->with('success', 'Thanks for contacting us!');
    }
}
