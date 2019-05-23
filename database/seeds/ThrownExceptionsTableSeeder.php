<?php

use Illuminate\Database\Seeder;

class ThrownExceptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('thrownexceptions')->insert([
            'bundleconfirmation_id' => '1',
            'seal_number' => '100001',
            'expected_Amount' => '30000000',
            'actual_amount' => '20500000',
            'thrown_by' => 'Jide',
            'ex_status' => 'Unresolcved',
        ]);
        DB::table('thrownexceptions')->insert([
            'bundleconfirmation_id' => '2',
            'seal_number' => '100003',
            'expected_Amount' => '15000000',
            'actual_amount' => '12500000',
            'thrown_by' => 'Jide',
            'ex_status' => 'Unresolcved',
        ]);
    }
}
