<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
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
