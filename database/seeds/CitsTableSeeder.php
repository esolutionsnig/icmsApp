<?php

use Illuminate\Database\Seeder;

class CitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cits')->insert([
            'evacuation_id' => '1',
            'seal_number' => '100001',
            'vehicle_id' => '2',
            'cit_officer_id' => 'ishola',
        ]);
        DB::table('cits')->insert([
            'evacuation_id' => '2',
            'seal_number' => '100002',
            'vehicle_id' => '1',
            'cit_officer_id' => 'james',
        ]);
    }
}
