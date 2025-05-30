<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payroll extends Model
{
    use SoftDeletes;

    protected $fillable = [
        "date",
        "payment_date",
        "base_salary",
        "total_salary",
        "allowance",
        "deduction",
        "teacher_id"
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($payroll) {
            $existingPayroll = self::where('teacher_id', $payroll->teacher_id)
                ->whereMonth('date', $payroll->date->month)
                ->whereYear('date', $payroll->date->year)
                ->first();

            if ($existingPayroll) {
                throw new \Exception('Guru ini sudah digaji untuk bulan ini.');
            }
        });
    }

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }
}
