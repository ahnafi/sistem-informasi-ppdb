<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payroll extends Model
{
    protected array $fillable = [
        "date",
        "payment_date",
        "base_salary",
        "total_salary",
        "allowance",
        "deduction",
        "teacher_id"
    ];

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }
}
