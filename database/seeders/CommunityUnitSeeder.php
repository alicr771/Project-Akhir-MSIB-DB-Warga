<?php

namespace Database\Seeders;

use App\Models\CommunityUnit;
use Illuminate\Database\Seeder;

class CommunityUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CommunityUnit::factory(5)->create();
    }
}
