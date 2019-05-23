<?php

use Illuminate\Database\Seeder;

class CurrenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->insert([
            'name' => 'Nigerian Naira',
            'slug' => 'naira',
        ]);
        DB::table('currencies')->insert([
            'name' => 'European Euro',
            'slug' => 'euro',
        ]);
        DB::table('currencies')->insert([
            'name' => 'US Dollar',
            'slug' => 'usd',
        ]);
        DB::table('currencies')->insert([
            'name' => 'British Pounds',
            'slug' => 'gbp',
        ]);
        DB::table('currencies')->insert([
            'name' => 'South Africa Rand',
            'slug' => 'zar',
        ]);
        DB::table('currencies')->insert([
            'name' => 'West African CFA',
            'slug' => 'cfa',
        ]);
        DB::table('currencies')->insert([
            'name' => 'Chinese Yuan',
            'slug' => 'cny',
        ]);
    }
}
