<?php

namespace Database\Factories;

use App\Models\category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'category_id' => category::factory(),
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'expert' => '<p>' . implode('<p></p>', $this->faker->paragraphs(2)) . '</p>',
            'body' => '<p>' . implode('<p></p>', $this->faker->paragraphs(6)) . '</p>'

        ];
    }
}
