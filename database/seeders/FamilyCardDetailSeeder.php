<?php

namespace Database\Seeders;

use App\Models\FamilyCard;
use App\Models\FamilyCardDetail;
use Illuminate\Database\Seeder;

class FamilyCardDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FamilyCardDetail::factory(5)->create();
    }
}
