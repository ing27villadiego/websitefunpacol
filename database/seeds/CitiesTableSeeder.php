<?php

use Illuminate\Database\Seeder;

use App\Funpacol\Entities\City;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        City::create([
            'id' => 1,
            'name' => 'Bogota',
            'slug' => 'bogota',
            'letter' => 'T'
        ]);

        City::create([
            'id' => 2,
            'name' => 'Barranquilla',
            'slug' => 'barranquilla',
            'letter' => 'A',
        ]);

        City::create([
            'id' => 3,
            'name' => 'Medellin',
            'slug' => 'medellin',
            'letter' => 'C'
        ]);



    }



}
