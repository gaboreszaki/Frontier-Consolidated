<?php

namespace Database\Seeders;

use App\Models\GameVersion;
use App\Models\Guide;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guide::factory()
            ->hasAttached(Tag::inRandomOrder()->first())
            ->hasAttached(GameVersion::inRandomOrder()->first())
            ->count(30)
            ->create();
    }
}
