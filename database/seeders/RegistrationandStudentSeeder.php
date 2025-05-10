<?php

namespace Database\Seeders;

use App\Models\Registration;
use App\Models\Student;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RegistrationAndStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $currentYear = date('Y');
        
        // Create 100 registrations
        for ($i = 0; $i < 100; $i++) {
            $gender = $faker->randomElement(['male', 'female']);
            $firstName = $gender === 'male' ? $faker->firstNameMale : $faker->firstNameFemale;
            $lastName = $faker->lastName;
            $fullName = $firstName . ' ' . $lastName;
            
            // Create registration
            $registration = Registration::create([
                'name' => $fullName,
                'email' => $faker->unique()->safeEmail(),
                'gender' => $gender,
                'place_of_birth' => $faker->city(),
                'date_of_birth' => $faker->dateTimeBetween('-18 years', '-15 years')->format('Y-m-d'),
                'village_district_province' => $faker->state() . ', ' . $faker->city(),
                'address' => $faker->address(),
                'phone' => $faker->phoneNumber(),
                'nisn' => $faker->unique()->numerify('##########'),
                'origin_school' => 'SMP ' . $faker->company(),
                'school_type' => $faker->randomElement(['public', 'private']),
                'information' => $faker->optional(0.7)->sentence() ?? '',
                'status' => $faker->randomElement(['pending', 'accepted', 'rejected']),
            ]);
            
            // Only create students for accepted registrations (80% chance)
            if ($registration->status === 'accepted' || $faker->boolean(80)) {
                // Generate NIS and school email
                $birthDate = new \DateTime($registration->date_of_birth);
                $yearMonth = $birthDate->format('ym');
                $nis = $currentYear . $yearMonth . str_pad($registration->id, 4, '0', STR_PAD_LEFT);
                $schoolEmail = strtolower(str_replace(' ', '.', $registration->name)) . '@student.school.edu';
                
                Student::create([
                    'nis' => $nis,
                    'name' => $registration->name,
                    'school_email' => $schoolEmail,
                    'registration_id' => $registration->id,
                    'created_at' => $registration->created_at->addDays(rand(1, 10)),
                ]);
            }
        }
    }
}