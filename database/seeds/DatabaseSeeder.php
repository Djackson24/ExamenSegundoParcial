<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(Antelope::class);
        $this->call(DugongsSeeder::class);
        $this->call(FrogsSeeder::class);
        $this->call(MaresSeeder::class);
        $this->call(OctopusesSeeder::class);
        $this->call(VicunasSeeder::class);
    }
}
