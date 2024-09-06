<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Track>
 */
class TrackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->sentence(10),
            'lyricist_id' => 1,
            'slug' => $this->faker->slug(),
            'cover_image' => $this->faker->imageUrl(240, 240),
            'audio_file' => null,
            'duration' => null,
            'like_count' => 0,
            'view_count' => 0,
            'status' => true,
            'is_public' => true,
            'is_promo' => false,
            'is_featured' => true,
        ];
    }
}
