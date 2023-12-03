<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        News::factory()->create([
            'title' => "Disclaimer",
            'content' => "This website is under development, all image, text, link etc act as a placeholder most of the content is factory generated, as so it is not represent the final product.",
            'author' => 'NorthAce',
            'is_announcement'=> 1
        ]);
        News::factory()->count(5)->create();
    }
}
