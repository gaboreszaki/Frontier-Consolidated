<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $factory = Category::factory();
        
        $newItem = [
            'name' => "New Players Guide",
            'description' => "Guides and resources for new and veteran players, but mostly targeted for the new players"
        ];
        $factory->create($newItem);
        
        
        $newItem = [
            'name' => "Mining Guide",
            'description' => "Guides and resources for Miners"
        ];
        $factory->create($newItem);
        
        $newItem = [
            'name' => "Money Guide",
            'description' => "Guides for how to make money"
        ];
        $factory->create($newItem);
        
        
    }
}
