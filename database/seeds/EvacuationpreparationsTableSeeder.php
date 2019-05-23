<?php

use Illuminate\Database\Seeder;

class EvacuationpreparationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('evacuationpreparations')->insert([
            'client_id' => '1',
            'evacuation_id' => '1',
            'seal_number' => '100001',
            'container_type_id' => '1',
            'category_id' => '1',
            'currency_id' => '1',
            'cash_1000' => '1000',
            'cash_1000_amount' => '30000000',
            'total_amount' => '30000000'
        ]);
        DB::table('evacuationpreparations')->insert([
            'client_id' => '2',
            'evacuation_id' => '2',
            'seal_number' => '100002',
            'container_type_id' => '1',
            'category_id' => '1',
            'currency_id' => '1',
            'cash_1000' => '500',
            'cash_1000_amount' => '15000000',
            'total_amount' => '15000000'
        ]);
        DB::table('evacuationpreparations')->insert([
            'client_id' => '1',
            'evacuation_id' => '1',
            'seal_number' => '100001',
            'container_type_id' => '1',
            'category_id' => '1',
            'currency_id' => '1',
            'cash_1000' => '1000',
            'cash_1000_amount' => '30000000',
            'total_amount' => '30000000'
        ]);
        DB::table('evacuationpreparations')->insert([
            'client_id' => '2',
            'evacuation_id' => '2',
            'seal_number' => '100002',
            'container_type_id' => '1',
            'category_id' => '1',
            'currency_id' => '1',
            'cash_1000' => '500',
            'cash_1000_amount' => '15000000',
            'total_amount' => '15000000'
        ]);
    }
}
