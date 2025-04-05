<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Models\Student;

class SchoolEmail
{
    public static function generate(string $fullName): string
    {
        $parts = explode(' ', trim(strtolower($fullName)));

        $firstName = $parts[0];
        $lastName = $parts[count($parts) - 1] ?? $firstName;

        // Slug dengan titik sebagai pemisah
        $base = Str::slug($firstName . '.' . $lastName, '.');

        $domain = env('SCHOOL_EMAIL_DOMAIN', 'siswa.sch.id');
        $email = $base . '@' . $domain;

        $counter = 1;
        while (Student::where('school_email', $email)->exists()) {
            $email = $base . $counter . '@' . $domain;
            $counter++;
        }

        return $email;
    }
}
