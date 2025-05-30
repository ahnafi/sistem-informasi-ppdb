<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
}
