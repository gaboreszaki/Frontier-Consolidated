<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::factory()->create(['name' => 'PVP'] );
        Tag::factory()->create(['name' => 'PVE'] );
        Tag::factory()->create(['name' => 'Illegal'] );
        Tag::factory()->create(['name' => 'Exploit'] );
    }
}
