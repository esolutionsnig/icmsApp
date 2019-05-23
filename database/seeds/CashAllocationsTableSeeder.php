<?php

use Illuminate\Database\Seeder;

class CashAllocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cashallocations')->insert([
            'allocated_to' => 'janey',
            'workstation' => '1',
            'seal_number' => 'ACC-ST-VI-LAG',
        ]);
        DB::table('cashallocations')->insert([
            'allocated_to' => 'shola',
            'workstation' => '2',
            'seal_number' => 'ACC-ST-VI-LAGs',
        ]);
    }
}
