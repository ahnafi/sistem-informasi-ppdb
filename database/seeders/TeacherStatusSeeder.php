<?php

namespace Database\Seeders;

use App\Models\TeacherStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TeacherStatus::create([
            "name" => "PNS",
            "base_salary" => 4000000
        ]);
    }
}
