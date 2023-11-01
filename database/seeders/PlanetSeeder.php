<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'id' => 3,
            'name' => '地球',
            'en_name' => 'earth',
            'radius' => 2,
            'weight' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        DB::table('planets')->insert($data);
    }
}
