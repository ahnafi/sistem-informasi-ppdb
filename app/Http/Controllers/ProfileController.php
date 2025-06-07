<?php

namespace App\Http\Controllers;

use App\Models\AcademicCalendar;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class ProfileController extends Controller
{
    public function index(): Response
    {
        return response()->view('pages.home');
    }

    public function profile(): Response
    {
        return response()->view('pages.profile');
    }

    public function orgstructure(): Response
    {
        return response()->view('pages.orgstructure');
    }

    public function teachers(): Response
    {
        return response()->view('pages.teachers');
    }

    public function contact(): Response
    {
        return response()->view('pages.contact');
    }

    public function sendContact(): RedirectResponse
    {
        return back()->with('success', 'Thanks for contacting us!');
    }

    public function facility(): Response
    {
        return response()->view('pages.facility');
    }

    public function academics(): Response
    {
        return response()->view('pages.academics');
    }
    public function studentaffairs(): Response
    {
        return response()->view('pages.studentaffairs');
    }

    public function calendar(): Response
    {
        $data = AcademicCalendar::latest()->first();
        return response()->view("pages.academiccalendar", compact("data"));
    }
}
