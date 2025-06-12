<?php

namespace App\Http\Controllers;

use App\Models\AcademicCalendar;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactFormMail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
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

    public function sendContact(ContactRequest $request): RedirectResponse
    {
        try {
            // Create contact record
            $contact = Contact::create($request->validated());

            // Send email notification to admin
            $adminEmail = config('mail.admin_email', 'admin@hogwarts.ac.uk');
            Mail::to($adminEmail)->send(new ContactFormMail($contact));

            // Send auto-reply to user
            $this->sendAutoReply($contact);

            return back()->with('success', 'Terima kasih! Pesan Anda telah terkirim. Kami akan merespons dalam 1-2 hari kerja.');

        } catch (\Exception $e) {
            Log::error('Contact form submission failed', [
                'error' => $e->getMessage(),
                'request_data' => $request->all()
            ]);

            return back()->with('error', 'Maaf, terjadi kesalahan saat mengirim pesan. Silakan coba lagi atau hubungi kami langsung.')->withInput();
        }
    }

    private function sendAutoReply(Contact $contact)
    {
        try {
            Mail::to($contact->email)->send(new \App\Mail\ContactAutoReply($contact));
        } catch (\Exception $e) {
            Log::warning('Failed to send auto-reply email', [
                'contact_id' => $contact->id,
                'error' => $e->getMessage()
            ]);
        }
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
        $calendars = AcademicCalendar::orderBy('created_at', 'desc')->get();
        
        // Transform data untuk view
        $formattedCalendars = $calendars->map(function ($calendar) {
            $events = [];
            
            if ($calendar->agenda) {
                foreach ($calendar->agenda as $agenda) {
                    if (isset($agenda['calendar']) && is_array($agenda['calendar'])) {
                        foreach ($agenda['calendar'] as $date => $activity) {
                            // Parse dan validasi format tanggal
                            try {
                                // Coba beberapa format tanggal yang umum
                                $parsedDate = null;
                                
                                // Format YYYY-MM-DD
                                if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $date)) {
                                    $parsedDate = Carbon::createFromFormat('Y-m-d', $date);
                                }
                                // Format DD/MM/YYYY
                                elseif (preg_match('/^\d{2}\/\d{2}\/\d{4}$/', $date)) {
                                    $parsedDate = Carbon::createFromFormat('d/m/Y', $date);
                                }
                                // Format MM/DD/YYYY
                                elseif (preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $date)) {
                                    $parsedDate = Carbon::createFromFormat('m/d/Y', $date);
                                }
                                // Format DD-MM-YYYY
                                elseif (preg_match('/^\d{2}-\d{2}-\d{4}$/', $date)) {
                                    $parsedDate = Carbon::createFromFormat('d-m-Y', $date);
                                }
                                // Coba parse otomatis
                                else {
                                    $parsedDate = Carbon::parse($date);
                                }
                                
                                if ($parsedDate) {
                                    $events[] = [
                                        'date' => $parsedDate->format('Y-m-d'),
                                        'date_formatted' => $parsedDate->format('d F Y'),
                                        'date_short' => $parsedDate->format('d M'),
                                        'day_name' => $parsedDate->format('l'),
                                        'activity' => $activity,
                                        'agenda_name' => $agenda['name'] ?? 'Kegiatan Akademik',
                                        'calendar_title' => $calendar->title,
                                        'sort_date' => $parsedDate->timestamp
                                    ];
                                }
                            } catch (\Exception $e) {
                                // Log error dan skip tanggal yang tidak valid
                                Log::warning("Invalid date format in academic calendar: {$date}", [
                                    'calendar_id' => $calendar->id,
                                    'agenda_name' => $agenda['name'] ?? 'Unknown',
                                    'error' => $e->getMessage()
                                ]);
                            }
                        }
                    }
                }
            }
            
            return [
                'id' => $calendar->id,
                'title' => $calendar->title,
                'events' => collect($events)->sortBy('sort_date')->values()
            ];
        });
        
        return response()->view('pages.academiccalendar', [
            'calendars' => $formattedCalendars
        ]);
    }

    public function testpurposes(): Response
    {
        return response()->view('pages.testpurposes');
    }
}
