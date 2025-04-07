<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function index(): \Illuminate\Http\Response
    {
        return response()->view('pages.home');
    }

    public function about(): \Illuminate\Http\Response
    {
        return response()->view('pages.about');
    }

    public function contact(): \Illuminate\Http\Response
    {
        return response()->view('pages.contact');
    }

    public function sendContact(): \Illuminate\Http\RedirectResponse
    {
        return back()->with('success', 'Thanks for contacting us!');
    }
}
