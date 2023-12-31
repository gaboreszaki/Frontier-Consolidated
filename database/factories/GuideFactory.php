<?php
    
    namespace Database\Factories;
    
    use Illuminate\Database\Eloquent\Factories\Factory;
    
    /**
     * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guide>
     */
    class GuideFactory extends Factory
    {
        
        /**
         * Define the model's default state.
         *
         * @return array<string, mixed>
         */
        public function definition(): array
        {
            return [
                'category_id' => 1,
                'title' => fake()->words(5, true),
                'description' => fake()->words(15, true),
                'video_url' => fake()->url()
            ];
        }
        
    }
