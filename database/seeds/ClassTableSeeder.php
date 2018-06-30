<?php

use Illuminate\Database\Seeder;

class ClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class')->insert([
            'successjob' => '50',
            'discount' => '0.10'
        ]);

        DB::table('class')->insert([
            'successjob' => '100',
            'discount' => '0.20'
        ]);

        DB::table('class')->insert([
            'successjob' => '150',
            'discount' => '0.30'
        ]);

        DB::table('class')->insert([
            'successjob' => '200',
            'discount' => '0.40'
        ]);
    }
}
