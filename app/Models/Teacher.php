<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
        "position",
        "photo",
        "religion",
        "highest_education",
        "appointment_descree",
        "teaching_history",
        "teacher_status_id",
    ];

    /**
     * Get the classrooms where this teacher is the homeroom teacher
     */
    public function homeroomClasses(): HasMany
    {
        return $this->hasMany(Classroom::class, 'homeroom_teacher_id');
    }
    
    public function status(): BelongsTo
    {
        return $this->belongsTo(TeacherStatus::class);
    }

    public function payrolls(): HasMany
    {
        return $this->hasMany(Payroll::class);
    }
}
