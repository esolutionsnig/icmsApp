<?php

use Illuminate\Database\Seeder;

class BankBranchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bank_branches')->insert([
            'banks_id' => '1',
            'branch_location' => 'Saka Tinubu, Victoria Island, Lagos',
            'branch_location_code' => 'ACC-ST-VI-LAG',
            'branch_cmu' => '1',
            'branch_rep' => '1',
        ]);
        DB::table('bank_branches')->insert([
            'banks_id' => '1',
            'branch_location' => 'Otigba Ikeja, Lagos',
            'branch_location_code' => 'ACC-O-I-LAG',
            'branch_cmu' => '1',
            'branch_rep' => '1',
        ]);
        DB::table('bank_branches')->insert([
            'banks_id' => '2',
            'branch_location' => 'Victoria Island, Lagos',
            'branch_location_code' => 'DBN-ST-VI-LAG',
            'branch_cmu' => '1',
            'branch_rep' => '1',
        ]);
        DB::table('bank_branches')->insert([
            'banks_id' => '2',
            'branch_location' => 'Ikeja, Lagos',
            'branch_location_code' => 'DBN-I-LAG',
            'branch_cmu' => '1',
            'branch_rep' => '1',
        ]);
        DB::table('bank_branches')->insert([
            'banks_id' => '3',
            'branch_location' => 'Ikeja, Lagos',
            'branch_location_code' => 'FB-I-LAG',
            'branch_cmu' => '1',
            'branch_rep' => '1',
        ]);
        DB::table('bank_branches')->insert([
            'banks_id' => '3',
            'branch_location' => 'Victoria Island, Lagos',
            'branch_location_code' => 'FB-ST-VI-LAG',
            'branch_cmu' => '1',
            'branch_rep' => '1',
        ]);
    }
}
