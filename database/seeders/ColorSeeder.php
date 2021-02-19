<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
            'name' => 'White',
            'code' => '#FFFFFF',
            'name_es' => 'Blanco'
        ]);

        DB::table('colors')->insert([
            'name' => 'Black',
            'code' => '#000000',
            'name_es' => 'Negre'
        ]);

        DB::table('colors')->insert([
            'name' => 'Blue',
            'code' => '#0000FF',
            'name_es' => 'Blau'
        ]);

        DB::table('colors')->insert([
            'name' => 'Red',
            'code' => '#FF0000',
            'name_es' => 'Vermell'
        ]);
    }
}
