<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AnimalSeeder extends Seeder
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
            DB::table('animals')->insert(array(
                'id' => rand(50),
                'especies' => str_random(10),
            ));
        }
    }
}
