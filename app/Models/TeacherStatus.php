<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeacherStatus extends Model
{
    use SoftDeletes;

    protected $fillable = [
        "name",
        "base_salary"
    ];

    public function teachers(): HasMany
    {
        return $this->hasMany(Teacher::class);
    }
}
