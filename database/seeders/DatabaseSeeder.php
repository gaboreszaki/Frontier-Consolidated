<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            // Test Users
            DefaultUserSeeder::class,
        
            // Test Data:
            AfterEventReportSeeder::class,
            CommunitySeeder::class,
            NewsSeeder::class,
        
            //// Guides
            CategorySeeder::class,
            TagSeeder::class,
            GameVersionSeeder::class,
            GuideSeeder::class
            
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
