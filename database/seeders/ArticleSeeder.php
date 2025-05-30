<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\Author;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        
        // Make sure we have categories and authors first
        $this->createCategoriesIfNeeded($faker);
        $this->createAuthorsIfNeeded($faker);
        
        // Get all category and author IDs for random assignment
        $categoryIds = Category::pluck('id')->toArray();
        $authorIds = Author::pluck('id')->toArray();
        
        // Create 50 articles
        for ($i = 0; $i < 50; $i++) {
            $title = $faker->sentence(rand(6, 10));
            $slug = Str::slug($title);
            
            // Create paragraphs for content with HTML formatting
            $contentParagraphs = [];
            $paragraphCount = rand(3, 8);
            for ($p = 0; $p < $paragraphCount; $p++) {
                $contentParagraphs[] = "<p>" . $faker->paragraph(rand(5, 15)) . "</p>";
            }
            
            // Add a random subheading between paragraphs
            $insertHeadingAt = rand(1, $paragraphCount - 1);
            array_splice($contentParagraphs, $insertHeadingAt, 0, ["<h3>" . $faker->sentence(rand(4, 8)) . "</h3>"]);
            
            // Combine all paragraphs
            $content = implode("\n", $contentParagraphs);
            
            Article::create([
                'title' => $title,
                'slug' => $slug,
                'content' => $content,
                'thumbnail' => 'articles/thumbnail-' . rand(1, 10) . '.jpg',
                'is_featured' => $faker->boolean(20), // 20% chance of being featured
                'author_id' => $faker->randomElement($authorIds),
                'category_id' => $faker->randomElement($categoryIds),
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]);
        }
    }
    
    /**
     * Create categories if none exist
     */
    private function createCategoriesIfNeeded($faker)
    {
        if (Category::count() === 0) {
            $categories = [
                'Pengumuman',
                'Berita Sekolah',
                'Prestasi Siswa',
                'Kegiatan OSIS',
                'Akademik',
                'Ekstrakurikuler',
                'Tips dan Trik',
                'Informasi PPDB',
                'Kurikulum',
                'Pendidikan Karakter'
            ];
            
            foreach ($categories as $categoryName) {
                Category::create([
                    'title' => $categoryName,  // Changed from 'name' to 'title'
                    'slug' => Str::slug($categoryName),
                ]);
            }
        }
    }
    
    /**
     * Create authors if none exist
     */
    private function createAuthorsIfNeeded($faker)
    {
        if (Author::count() === 0) {
            // Create 5 authors
            for ($i = 0; $i < 5; $i++) {
                $gender = $faker->randomElement(['male', 'female']);
                $firstName = $gender === 'male' ? $faker->firstNameMale : $faker->firstNameFemale;
                $name = $firstName . ' ' . $faker->lastName;
                
                Author::create([
                    'name' => $name,
                    'bio' => $faker->paragraph(),
                ]);
            }
        }
    }
}