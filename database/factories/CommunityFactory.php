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
            'layout' => fake()->randomElement([
                'centered',
                'center-left',
                'center-right',
                'top-left',
                'top-right',
                'bottom-left',
                'bottom-right'
            ]),
            'title' => fake()->realText(40),
            'content' => fake()->realTextBetween(10, 450),
            'background_image' => fake()->randomElement(config('tmp_images.images')),
            'is_pinned' => fake()->boolean(),
            'priority' => fake()->numberBetween(1, 100)
            
        ];
    }
}
