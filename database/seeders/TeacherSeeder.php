<?php

namespace Database\Seeders;

use App\Models\Teacher;
use App\Models\TeacherStatus;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        // Define constants
        $religions = ['islam', 'Catholic', 'Protestant', 'hindu', 'buddha', 'konghucu', 'other'];
        $positions = ['Kepala Sekolah', 'Wakil Kepala Sekolah', 'Guru BK', 'Guru Wali Kelas', 'Guru Pembina OSIS', 'Guru Staf', 'Guru Penggerak', 'Guru Ekstrakurikuler'];
        $educations = ['S1', 'S2', 'S3', 'D3', 'D4'];
        // $teacherStatuses = ['PNS', 'PPPK', 'GTY', 'Honorer', 'Kontrak Daerah', 'Kontrak Sekolah', 'Wiyata Bakti', 'Relawan'];

        // Create 30 teachers
        for ($i = 0; $i < 30; $i++) {
            $gender = $faker->randomElement(['male', 'female']);
            $name = $gender === 'male' ? $faker->firstNameMale . ' ' . $faker->lastName : $faker->firstNameFemale . ' ' . $faker->lastName;

            Teacher::create([
                'name' => $name,
                'email' => $faker->unique()->safeEmail(),
                'school_email' => strtolower(str_replace(' ', '.', $name)) . '@school.edu',
                'nip' => $faker->unique()->numerify('##########'),
                'phone' => $faker->phoneNumber(),
                'gender' => $gender,
                'date_of_birth' => $faker->dateTimeBetween('-60 years', '-25 years')->format('Y-m-d'),
                'address' => $faker->address(),
                'teacher_status_id' => TeacherStatus::first()->id,
                'position' => $faker->randomElement($positions),
                'religion' => $faker->randomElement($religions),
                'highest_education' => $faker->randomElement($educations),
                'appointment_descree' => 'SK-' . $faker->numerify('######') . '/EDU/' . $faker->year(),
                'teaching_history' => $faker->paragraphs(2, true),
            ]);
        }
    }
}