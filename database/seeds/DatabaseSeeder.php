<?php

use App\Model\Banks;
use App\Model\Vehicles;
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
        factory(App\Model\Banks::class,50)->create();
        factory(App\Model\Vehicles::class,50)->create();
    }
}
