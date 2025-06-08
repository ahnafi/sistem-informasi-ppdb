<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            ArticleSeeder::class,
            TeacherStatusSeeder::class,
            TeacherSeeder::class,
            RegistrationAndStudentSeeder::class,
            ClassroomSeeder::class,
            AcademicCalendarSeeder::class
        ]);

        \App\Models\Category::factory(5)->create();
        \App\Models\Author::factory(3)->create();
        \App\Models\Article::factory(20)->create()->each(function ($article) {
            if ($article->is_featured) {
                \App\Models\Banner::factory()->create([
                    'article_id' => $article->id
                ]);
            }
        });
    }
}
