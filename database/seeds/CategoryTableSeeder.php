<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            'category_name' => 'Daily',
        ]);

        DB::table('category')->insert([
            'category_name' => 'Technology',
        ]);

        DB::table('category')->insert([
            'category_name' => 'Hospitality',
        ]);

        DB::table('category')->insert([
            'category_name' => 'Others',
        ]);
    }
}
