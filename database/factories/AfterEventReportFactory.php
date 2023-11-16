<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AfterEventReport>
 */
class AfterEventReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->text(50),
            'op_leader' => fake()->text(50),
            'op_date' => fake()->date(),
            'op_summary' => fake()->realTextBetween(200, 5000),
            'op_went_well' => fake()->paragraphs(),
            'op_can_be_improved' => fake()->paragraphs(),
            'op_cover_img' => null,
            'author' => fake()->text(50)
            
        ];
    }
}
