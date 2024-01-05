<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attachment>
 */
class AttachmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $fileName = fake()->bothify('test-?????-#####');
        $fileExt = fake()->fileExtension();
        
        return [
            'name' => fake()->words('3',true),
            'original_filename' => "$fileName.$fileExt",
            'filename' => base64_encode($fileName).".$fileExt",
            'filetype' => fake()->mimeType(),
            'status' => fake()->randomElement(['ready', 'uploading', 'processing', 'deleted']),
            'uploader' => fake()->userName(),
            'has_original' => fake()->boolean(),
            'has_card' => fake()->boolean(),
            'has_thumbnail' => fake()->boolean(),
        ];
    }
}
