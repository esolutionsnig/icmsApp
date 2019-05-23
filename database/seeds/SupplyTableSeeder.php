<?php

use Illuminate\Database\Seeder;

class SupplyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supplies')->insert([
            'client_id' => '1',
            'sr_title' => 'Access Bank Plc Supply Request For May 16',
            'sr_type' => 'Branch Supply Request',
            'sr_date' => '2019-05-16',
            'sr_comment' => 'Urgent',
            'requested_by' => 'Jide',
            'requested_on' => '8574515151',
        ]);
        DB::table('supplies')->insert([
            'client_id' => '2',
            'sr_title' => 'Diamond Bank Plc Supply Request For May 16',
            'sr_type' => 'Branch Supply Request',
            'sr_date' => '2019-05-16',
            'sr_comment' => 'Urgent',
            'requested_by' => 'Shola',
            'requested_on' => '8574515151',
        ]);
    }
}
