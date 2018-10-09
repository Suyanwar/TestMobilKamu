<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Country;

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
        $data = json_decode(file_get_contents("https://restcountries.eu/rest/v2/all"));
        foreach($data as $d){
            $insert = new Country;
            $insert->name = $d->name;
            $insert->capital = $d->capital;
            $insert->region = $d->region;
            $insert->sub_region = $d->subregion;
            $insert->population = $d->population;
            $insert->save();
        }
    }
}
