<?php

use Illuminate\Database\Seeder;

class ContainerTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('containertypes')->insert([
            'name' => 'Bag',
        ]);
        DB::table('containertypes')->insert([
            'name' => 'Full Box',
        ]);
        DB::table('containertypes')->insert([
            'name' => 'Others',
        ]);
        DB::table('containertypes')->insert([
            'name' => 'Odd Box',
        ]);
    }
}
