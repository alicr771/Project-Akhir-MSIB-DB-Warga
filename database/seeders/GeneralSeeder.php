<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\General;


class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        General::create([
            'name' => 'Desa Durian Runtuh',
            'address' => 'KP. Durian Runtuh m',
            'head' => 'Ato Dalang',
            'deputy_head' => 'Kak Ros',
            'treasurer' => 'Upin',
            'secretary' => 'IPin',
        ]);
    }
}
