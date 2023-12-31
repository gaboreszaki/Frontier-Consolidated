<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GameVersions>
 */
class GuideGameVersionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'v'.fake()->numberBetween(2,4).'.'.fake()->numberBetween(0,10).'.'.fake()->numberBetween(0,30)
        ];
    }
}
