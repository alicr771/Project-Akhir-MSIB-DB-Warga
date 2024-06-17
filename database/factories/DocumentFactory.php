<?php

namespace Database\Factories;

use App\Models\Resident;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Document>
 */
class DocumentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'resident_id' => Resident::factory(),
            'type' => fake()->word(),
            'number' => fake()->word(),
            'path' => fake()->word(),
            'issued_date' => fake()->date(),
            'expiration_date' => fake()->date(),
            'notes' => fake()->text()
        ];
    }
}
