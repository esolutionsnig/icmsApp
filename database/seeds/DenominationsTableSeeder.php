<?php

use Illuminate\Database\Seeder;

class DenominationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('denominations')->insert([
            'name' => '1000',
        ]);
        DB::table('denominations')->insert([
            'name' => '500',
        ]);
        DB::table('denominations')->insert([
            'name' => '200',
        ]);
        DB::table('denominations')->insert([
            'name' => '100',
        ]);
        DB::table('denominations')->insert([
            'name' => '50',
        ]);
        DB::table('denominations')->insert([
            'name' => '20',
        ]);
        DB::table('denominations')->insert([
            'name' => '10',
        ]);
        DB::table('denominations')->insert([
            'name' => '5',
        ]);
        DB::table('denominations')->insert([
            'name' => '1',
        ]);
    }
}
