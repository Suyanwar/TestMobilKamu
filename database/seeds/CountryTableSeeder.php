<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset Country
        DB::table('mst_country')->delete();

        // Seed New Country
        DB::table('mst_country')->insert([
            'name'       => 'Afghanistan',
            'capital'    => 'Kabul',
            'region'     => 'Asia',
            'sub_region' => 'Southern Asia',
            'population' => 27657145
        ]);
        DB::table('mst_country')->insert([
            'name'       => 'Åland Islands',
            'capital'    => 'Mariehamn',
            'region'     => 'Europe',
            'sub_region' => 'Northern Europe',
            'population' => 28875
        ]);
        DB::table('mst_country')->insert([
            'name'       => 'Albania',
            'capital'    => 'Tirana',
            'region'     => 'Europe',
            'sub_region' => 'Southern Europe',
            'population' => 2886026
        ]);
        DB::table('mst_country')->insert([
            'name'       => 'Algeria',
            'capital'    => 'Algiers',
            'region'     => 'Africa',
            'sub_region' => 'Northern Africa',
            'population' => 40400000
        ]);
    }
}
