<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Payroll extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'teacher_id',
        'date',
        'payment_date',
        'base_salary',
        'allowance',
        'deduction',
        'total_salary',
    ];

    protected $casts = [
        'date' => 'date',
        'payment_date' => 'date',
        'base_salary' => 'decimal:2',
        'allowance' => 'decimal:2',
        'deduction' => 'decimal:2',
        'total_salary' => 'decimal:2',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($payroll) {
            // Ensure date is a Carbon instance
            $date = $payroll->date instanceof Carbon ? $payroll->date : Carbon::parse($payroll->date);

            $existingPayroll = self::where('teacher_id', $payroll->teacher_id)
                ->whereMonth('date', $date->month)
                ->whereYear('date', $date->year)
                ->where('id', '!=', $payroll->id ?? 0) // Exclude current record when updating
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
