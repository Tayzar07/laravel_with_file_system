<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $laravel = Category::factory()->create([
            'name' => 'Laravel',
            'slug' => 'laravel',
        ]);
        $php = Category::factory()->create([
            'name' => 'PHP',
            'slug' => 'php',
        ]);
        $js = Category::factory()->create([
            'name' => 'JavaScript',
            'slug' => 'javascript',
        ]);
        Blog::factory(3)->create([
            'category_id' => $laravel->id,
        ]);
        Blog::factory(3)->create([
            'category_id' => $php->id,
        ]);
        Blog::factory(3)->create([
            'category_id' => $js->id,
        ]);

    }
}
