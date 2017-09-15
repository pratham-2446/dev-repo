<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
       {
                   //Get all of the countries
          $now = Carbon::now();
           $countries = Countries::getList();
           foreach ($countries as $countryId => $country){
            DB::table('Countries')->insert(array(
                   'name' => $country['name'],
                   'iso2' => $country['iso_3166_2'],
                   'iso3' => $country['iso_3166_3'],
                   'created_at' => $now,
                   'updated_at' => $now,
                 ));
           }
       }
   }
