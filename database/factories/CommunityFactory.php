<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\community>
 */
class CommunityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'layout' => fake()->randomElement(['left', 'right', 'center']),
            'title' => fake()->text(50),
            'content' => fake()->text(2000),
            'background_image' => null,
            'is_pinned' => fake()->boolean(),
            'priority' => fake()->numberBetween(1, 100)
            
        ];
    }
}
