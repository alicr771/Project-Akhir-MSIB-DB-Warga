<?php

namespace Database\Seeders;

use App\Models\ResidentMigration;
use Illuminate\Database\Seeder;

class ResidentMigrationSeeder extends Seeder
{
    public function run(): void
    {
        ResidentMigration::factory(5)->create();
    }
}
