<?php

namespace Database\Factories;

use App\Models\Priority;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
 */
class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence();
        $slug = Str::slug($title);

        return [
            'title' => $title,
            'slug' => $slug,
            'body' => fake()->paragraph(),
            'priority_id' => Priority::factory(),
            'user_id' => User::factory()
        ];
    }
}
