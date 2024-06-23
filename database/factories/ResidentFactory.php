<?php

namespace Database\Factories;

use App\Models\CommunityUnit;
use App\Models\FamilyCardDetail;
use App\Models\Neighborhood;
use App\Models\SubDistrict;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resident>
 */
class ResidentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nik' => '',
            'name' => fake()->name(),
            'pob' => fake()->city(),
            'dob' => fake()->date(),
            'sub_district_id' => SubDistrict::factory(),
            'neighborhood_id' => Neighborhood::factory(),
            'community_unit_id' => CommunityUnit::factory(),
            'family_card_detail_id' => FamilyCardDetail::factory(),
        ];
    }
}
