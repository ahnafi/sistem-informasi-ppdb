<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return response()->render('Home');
    }

    public function about()
    {
        return response()->render('About');
    }

    public function contact()
    {
        return response()->render('Contact');
    }

    public function sendContact(): \Illuminate\Http\RedirectResponse
    {
        return back()->with('success', 'Thanks for contacting us!');
    }
}
