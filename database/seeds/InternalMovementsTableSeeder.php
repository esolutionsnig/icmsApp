<?php

use Illuminate\Database\Seeder;

class InternalMovementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('internalmovements')->insert([
            'source_location' => '1',
            'destination_location' => '2',
            'seal_number' => '100001',
            'movement_status' => 'Awaiting Approval',
        ]);
        DB::table('internalmovements')->insert([
            'source_location' => '1',
            'destination_location' => '2',
            'seal_number' => '100001',
            'movement_status' => 'Awaiting Approval',
        ]);
        DB::table('internalmovements')->insert([
            'source_location' => '1',
            'destination_location' => '2',
            'seal_number' => '100001',
            'movement_status' => 'Awaiting Approval',
        ]);
    }
}
