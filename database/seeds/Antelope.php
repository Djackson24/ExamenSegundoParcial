<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class Antelope extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0;$i<50;$i++){
            DB::table('antelopes')->insert(array(
                'nombre' => $faker->firstNameMale,
                'color' => str_random(10),
                'peso' => rand(15,50),
                'longitud' => rand(15,80),
                'edad'=> rand(0,20),
                'animals_id' => 1,
            ));
        }
    }
}
