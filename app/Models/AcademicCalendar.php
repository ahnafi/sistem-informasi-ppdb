<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class AcademicCalendar extends Model
{
    use SoftDeletes;

    protected $fillable = [
        "title",
        "agenda"
    ];

    protected $casts = [
        'agenda' => 'array',
    ];
    
    /**
     * Get all events from all agendas in a flattened format
     */
    public function getAllEvents()
    {
        $events = [];
        
        if ($this->agenda) {
            foreach ($this->agenda as $agenda) {
                if (isset($agenda['calendar']) && is_array($agenda['calendar'])) {
                    foreach ($agenda['calendar'] as $date => $activity) {
                        try {
                            $parsedDate = $this->parseDate($date);
                            if ($parsedDate) {
                                $events[] = [
                                    'date' => $parsedDate->format('Y-m-d'),
                                    'date_formatted' => $parsedDate->format('d F Y'),
                                    'activity' => $activity,
                                    'agenda_name' => $agenda['name'] ?? 'Tidak ada nama',
                                    'sort_date' => $parsedDate->timestamp
                                ];
                            }
                        } catch (\Exception $e) {
                            // Skip invalid dates
                            continue;
                        }
                    }
                }
            }
        }
        
        return collect($events)->sortBy('sort_date')->values();
    }
    
    /**
     * Parse date from DD/MM/YYYY format only
     */
    private function parseDate($date)
    {
        // Gunakan format DD/MM/YYYY saja
        return Carbon::createFromFormat('d/m/Y', $date);
    }
    
    /**
     * Get upcoming events (next 30 days)
     */
    public function getUpcomingEvents($days = 30)
    {
        $now = Carbon::now();
        $future = $now->copy()->addDays($days);
        
        return $this->getAllEvents()->filter(function ($event) use ($now, $future) {
            $eventDate = Carbon::parse($event['date']);
            return $eventDate->between($now, $future);
        });
    }
}
