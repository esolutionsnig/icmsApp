<?php

use Illuminate\Database\Seeder;

class BookBallancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookballances')->insert([
            'banks_id' => '1',
            'bb_balance' => '405000000',
        ]);
        DB::table('bookballances')->insert([
            'banks_id' => '2',
            'bb_balance' => '685000000',
        ]);
    }
}
