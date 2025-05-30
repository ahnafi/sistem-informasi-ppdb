<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Teacher;
use App\Models\Student;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $currentYear = date('Y');
        
        // Create 10 classrooms
        $classNames = ['X IPA 1', 'X IPA 2', 'X IPS 1', 'X IPS 2', 'XI IPA 1', 'XI IPA 2', 'XI IPS 1', 'XI IPS 2', 'XII IPA 1', 'XII IPS 1'];
        $academicYear = $currentYear . '/' . ($currentYear + 1);
        $allTeachers = Teacher::pluck('id')->toArray();
        
        if (empty($allTeachers)) {
            $this->command->info('No teachers found. Skipping classroom creation.');
            return;
        }
        
        foreach ($classNames as $className) {
            $grade = substr($className, 0, 1) === 'X' ? '10' : (substr($className, 0, 2) === 'XI' ? '11' : '12');
            $specialization = strpos($className, 'IPA') !== false ? 'IPA' : 'IPS';
            
            Classroom::create([
                'name' => $className,
                'academic_year' => $academicYear,
                'grade_level' => $grade,
                'specialization' => $specialization,
                'capacity' => rand(25, 40),
                'homeroom_teacher_id' => $faker->randomElement($allTeachers),
                'room' => 'R-' . $faker->numerify('###'),
                'description' => $faker->sentence(),
                'status' => 'active',
            ]);
        }
        
        // Assign students to classes
        $students = Student::all();
        $classrooms = Classroom::all();
        
        if ($classrooms->isNotEmpty()) {
            foreach ($students as $student) {
                // 80% chance a student is assigned to a classroom
                if ($faker->boolean(80)) {
                    $classroom = $faker->randomElement($classrooms->toArray());
                    
                    // Only assign if classroom has capacity
                    $currentClassroomStudents = Student::where('classroom_id', $classroom['id'])->count();
                    if ($currentClassroomStudents < $classroom['capacity']) {
                        $student->classroom_id = $classroom['id'];
                        $student->save();
                    }
                }
            }
        }
    }
}