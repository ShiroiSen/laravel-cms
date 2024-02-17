<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(mt_rand(2, 4)),
            'slug' => fake()->slug(),
            'body' => fake()->paragraph(mt_rand(5, 100)),
            'user_id' => mt_rand(1,10),
            'category_id' => mt_rand(1,4),
        ];
    }
}
