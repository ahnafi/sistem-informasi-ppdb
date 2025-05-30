<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use softDeletes;

    protected $fillable = [
        "nis",
        "name",
        "avatar",
        "school_email",
        "registration_id"
    ];

    public function registration(): BelongsTo
    {
        return $this->belongsTo(Registration::class);
    }

    /**
     * Get the classroom this student belongs to
     */
    public function classroom(): BelongsTo
    {
        return $this->belongsTo(Classroom::class);
    }

    public function getDisplayNameAttribute(): string
    {
        return "{$this->nis} - {$this->name}";
    }

}
