<?php

use Illuminate\Database\Seeder;

class VehiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicles')->insert([
            'name' => 'ICMS-BV-LAG-1',
            'number' => str_random(10),
        ]);
        DB::table('vehicles')->insert([
            'name' => 'ICMS-BV-LAG-2',
            'number' => str_random(10),
        ]);
        DB::table('vehicles')->insert([
            'name' => 'ICMS-BV-LAG-3',
            'number' => str_random(10),
        ]);
        DB::table('vehicles')->insert([
            'name' => 'ICMS-BV-LAG-4',
            'number' => str_random(10),
        ]);
        DB::table('vehicles')->insert([
            'name' => 'ICMS-BV-LAG-5',
            'number' => str_random(10),
        ]);
    }
}
