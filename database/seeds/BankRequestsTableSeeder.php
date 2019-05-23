<?php

use Illuminate\Database\Seeder;

class BankRequestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bank_requests')->insert([
            'er_name' => 'Access Bank Plc Evacuation Request For May 16',
            'bank_id' => '1',
            'branch_id' => '1',
            'location_code' => 'ACC-ST-VI-LAG',
            'consignment_location_id' => '1',
            'cit_reciever_id' => '',
            'cit_confirmation_token' => '',
            'vehicle_id' => '',
            'cit' => '',
            'cit_confirmation' => '',
            'cit_confirmation_date' => '',
            'client_rep' => '',
            'cp_done' => '',
            'er_status' => '',
            'preannounced' => '',
            'date_execution' => ''
        ]);
        DB::table('bank_requests')->insert([
            'er_name' => 'Access Bank Plc Evacuation Request For May 15',
            'bank_id' => '1',
            'branch_id' => '2',
            'location_code' => 'ACC-ST-VI-LAG',
            'consignment_location_id' => '1',
            'cit_reciever_id' => '',
            'cit_confirmation_token' => '',
            'vehicle_id' => '',
            'cit' => '',
            'cit_confirmation' => '',
            'cit_confirmation_date' => '',
            'client_rep' => '',
            'cp_done' => '',
            'er_status' => '',
            'preannounced' => '',
            'date_execution' => ''
        ]);
        DB::table('bank_requests')->insert([
            'er_name' => 'Diamond Bank Plc Evacuation Request For May 16',
            'bank_id' => '2',
            'branch_id' => '3',
            'location_code' => 'ACC-ST-VI-LAG',
            'consignment_location_id' => '1',
            'cit_reciever_id' => '',
            'cit_confirmation_token' => '',
            'vehicle_id' => '',
            'cit' => '',
            'cit_confirmation' => '',
            'cit_confirmation_date' => '',
            'client_rep' => '',
            'cp_done' => '',
            'er_status' => '',
            'preannounced' => '',
            'date_execution' => ''
        ]);
        DB::table('bank_requests')->insert([
            'er_name' => 'Diamond Bank Plc Evacuation Request For May 15',
            'bank_id' => '2',
            'branch_id' => '4',
            'location_code' => 'ACC-ST-VI-LAG',
            'consignment_location_id' => '1',
            'cit_reciever_id' => '',
            'cit_confirmation_token' => '',
            'vehicle_id' => '',
            'cit' => '',
            'cit_confirmation' => '',
            'cit_confirmation_date' => '',
            'client_rep' => '',
            'cp_done' => '',
            'er_status' => '',
            'preannounced' => '',
            'date_execution' => '',
        ]);
    }
}
