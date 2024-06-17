<?php

namespace Database\Factories;

use App\Models\Resident;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ResidentMigration>
 */
class ResidentMigrationFactory extends Factory
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
            'date' => fake()->date(),
            'from' => fake()->city(),
            'to' => fake()->city(),
            'cause' => fake()->paragraph(),
            'status' => 'single'
        ];
    }
}
