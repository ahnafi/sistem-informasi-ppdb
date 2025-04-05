<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Registration extends Model
{
    use softDeletes;

    protected $fillable = [
        "email",
        "name",
        "gender",
        "place_of_birth",
        "date_of_birth",
        "village_district_province",
        "address",
        "phone",
        "nisn",
        "origin_school",
        "school_type",
        "information",
        "status",
    ];

    protected $casts = [
        'date_of_birth' => 'date',
    ];

    public function periodic(): HasOne
    {
        return $this->hasOne(Periodic::class);
    }

    public function achievements(): HasMany
    {
        return $this->hasMany(Achievement::class);
    }

    public function studentParents(): HasMany
    {
        return $this->hasMany(StudentParent::class);
    }

    public function student(): HasOne
    {
        return $this->hasOne(Student::class);
    }
}
