<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use SoftDeletes;

    protected $fillable = [
        "email",
        "school_email",
        "name",
        "nip",
        "phone",
        "gender",
        "date_of_birth",
        "address",
        "status",
        "position",
        "photo",
        "religion",
        "highest_education",
        "appointment_descree",
        "teaching_history",
    ];
}
