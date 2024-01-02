<?php

namespace Database\Seeders;

use App\Models\GameVersion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameVersionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GameVersion::factory()->count(15)->create();
    }
}
