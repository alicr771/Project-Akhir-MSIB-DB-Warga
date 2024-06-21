<?php

namespace Database\Seeders;

use App\Models\ResidentMigration;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            ResidentSeeder::class,
            ResidentMigrationSeeder::class
        ]);
    }
}
