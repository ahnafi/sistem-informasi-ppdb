<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Classroom extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'academic_year',
        'grade_level',
        'specialization',
        'capacity',
        'homeroom_teacher_id',
        'room',
        'description',
        'status',
    ];

    /**
     * Get the homeroom teacher for this class
     */
    public function homeroomTeacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class, 'homeroom_teacher_id');
    }

    /**
     * Get all students in this classroom
     */
    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }

    /**
     * Check if the classroom has available capacity
     */
    public function hasCapacity(): bool
    {
        return $this->students()->count() < $this->capacity;
    }

    /**
     * Get current fill percentage of the class
     */
    public function fillPercentage(): float
    {
        if ($this->capacity > 0) {
            return ($this->students()->count() / $this->capacity) * 100;
        }
        
        return 0;
    }
}
