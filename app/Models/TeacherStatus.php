<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TeacherStatus extends Model
{
    protected array $fillable = [
        "name",
        "base_salary"
    ];

    public function teachers(): HasMany
    {
        return $this->hasMany(Teacher::class);
    }
}
