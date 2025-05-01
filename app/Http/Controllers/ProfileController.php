<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function index(): \Illuminate\Http\Response
    {
        return response()->view('pages.home');
    }

    public function profile(): \Illuminate\Http\Response
    {
        return response()->view('pages.profile');
    }

    public function orgstructure(): \Illuminate\Http\Response
    {
        return response()->view('pages.orgstructure');
    }

    public function teachers(): \Illuminate\Http\Response
    {
        return response()->view('pages.teachers');
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
