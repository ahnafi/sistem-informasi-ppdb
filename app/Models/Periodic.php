<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Periodic extends Model
{
    use softDeletes;
    protected $fillable = [
        "religion",
        "residence",
        "height",
        "weight",
        "medical_history",
        "home_distance",
        "travel_time",
        "child_status",
        "child_order",
        "siblings",
        "registration_id"
    ];

    public function registration(): BelongsTo
    {
        return $this->belongsTo(Registration::class);
    }
}
