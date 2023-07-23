<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'tags' => 'laravel, backend ,api',
            'company' => $this->faker->company(),
            'email' => 'email2@email.com',
            'location' => $this->faker->city(),
            'website' => $this->faker->url(),
            'description' => $this->faker->paragraph(5)
        ];
    }
}
