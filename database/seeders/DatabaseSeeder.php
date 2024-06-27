<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            GeneralSeeder::class,
            NeighborhoodSeeder::class,
            CommunityUnitSeeder::class,
            SubDistrictSeeder::class,
        ]);
    }
}
