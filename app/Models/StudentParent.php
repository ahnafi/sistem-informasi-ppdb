<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentParent extends Model
{
    use SoftDeletes;

    protected $fillable = [
        "type",
        "name",
        "phone",
        "village_district_province",
        "address",
        "job",
        "education", // Missing field
        "income",
        "registration_id"
    ];

    public function registration(): BelongsTo
    {
        return $this->belongsTo(Registration::class);
    }
}
