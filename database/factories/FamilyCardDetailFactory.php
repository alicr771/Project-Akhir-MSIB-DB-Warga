<?php

namespace Database\Factories;

use App\Models\FamilyCard;
use App\Models\Resident;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FamilyCardDetail>
 */
class FamilyCardDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'family_card_id' => FamilyCard::factory(),
            // 'resident_id' => Resident::factory(),
            'status' => 'Family Head'
        ];
    }
}
