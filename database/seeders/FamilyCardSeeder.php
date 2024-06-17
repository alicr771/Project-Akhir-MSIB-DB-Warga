<?php

namespace Database\Seeders;

use App\Models\FamilyCard;
use Illuminate\Database\Seeder;

class FamilyCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FamilyCard::factory(5)->create();
    }
}
