<?php

namespace Database\Seeders;

use App\Models\CommunityUnit;
use App\Models\FamilyCardDetail;
use App\Models\Neighborhood;
use App\Models\Resident;
use App\Models\SubDistrict;
use Illuminate\Database\Seeder;

class ResidentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            SubDistrictSeeder::class,
            NeighborhoodSeeder::class,
            CommunityUnitSeeder::class,
            FamilyCardDetailSeeder::class,
        ]);

        Resident::factory(10)->recycle([
            SubDistrict::all(),
            Neighborhood::all(),
            CommunityUnit::all(),
            FamilyCardDetail::all()
        ])->create();
    }
}
