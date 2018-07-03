<?php

use Illuminate\Database\Seeder;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            'location' => 'Jl. Krakatau No.7',
        ]);

        DB::table('locations')->insert([
            'location' => 'Jl. Jemadi No.45',
        ]);

        DB::table('locations')->insert([
            'location' => 'Jl. Lavender No.7, Komp. Cemara Asri',
        ]);

        DB::table('locations')->insert([
            'location' => 'Jl. Singa No.1',
        ]);
    }
}
