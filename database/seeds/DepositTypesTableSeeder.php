<?php

use Illuminate\Database\Seeder;

class DepositTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deposittypes')->insert([
            'name' => 'Central Bank of Nigeria (CBN) Deposits',
        ]);
        DB::table('deposittypes')->insert([
            'name' => 'Total Cash Solution (TCS) Deposits',
        ]);
        DB::table('deposittypes')->insert([
            'name' => 'Cash Processing (CP) Deposits',
        ]);
        DB::table('deposittypes')->insert([
            'name' => 'Retail Deposits',
        ]);
        DB::table('deposittypes')->insert([
            'name' => 'Others',
        ]);
    }
}
