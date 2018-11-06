<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DugongsSeeder extends Seeder
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
            DB::table('dugongs')->insert(array(
                'nombre' => $faker->firstNameMale,
                'color' => str_random(10),
                'peso' => random_int(15,50),
                'longitud' => random_int(15,80),
                'edad'=> random_init(0,20),
                'animals_id' => 1,
            ));
        }
    }
}
