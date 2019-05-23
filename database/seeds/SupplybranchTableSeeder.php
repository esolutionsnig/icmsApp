<?php

use Illuminate\Database\Seeder;

class SupplybranchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supplybranches')->insert([
            'supply_id' => '1',
            'client' => '1',
            'branch' => '2',
            'currency' => '1',
            'denomination' => '2',
            'cash_category' => '3',
            'amount' => '30000000',
            'requested_by' => 'Jide',
            'requested_on' => '2885415121',
        ]);
        DB::table('supplybranches')->insert([
            'supply_id' => '1',
            'client' => '1',
            'branch' => '1',
            'currency' => '2',
            'denomination' => '1',
            'cash_category' => '1',
            'amount' => '10000000',
            'requested_by' => 'Jide',
            'requested_on' => '2885415121',
        ]);
        DB::table('supplybranches')->insert([
            'supply_id' => '2',
            'client' => '2',
            'branch' => '2',
            'currency' => '1',
            'denomination' => '2',
            'cash_category' => '3',
            'amount' => '30000000',
            'requested_by' => 'Shola',
            'requested_on' => '2885415121',
        ]);
        DB::table('supplybranches')->insert([
            'supply_id' => '2',
            'client' => '2',
            'branch' => '1',
            'currency' => '2',
            'denomination' => '1',
            'cash_category' => '1',
            'amount' => '10000000',
            'requested_by' => 'Shola',
            'requested_on' => '2885415121',
        ]);
    }
}
