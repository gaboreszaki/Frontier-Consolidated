<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create(["name" => "NorthAce", "email" => "northAce@test.com"]);
        User::factory()->create(["name" => "LoudGuns", "email" => "loudGuns@test.com"]);
    }
}
