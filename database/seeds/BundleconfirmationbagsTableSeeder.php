<?php

use Illuminate\Database\Seeder;

class BundleconfirmationbagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bundleconfirmationbags')->insert([
            'bundleconfirmation_id' => '1',
            'client' => '1',
            'branch' => '1',
            'seal_number' => '100001',
            'currency' => '1',
            'd1000' => '1000',
            'd1000_category' => '1',
            'd1000_amount' => '30000000',
            'amount' => '30000000',
            'added_by' => 'Ernest',
        ]);
        DB::table('bundleconfirmationbags')->insert([
            'bundleconfirmation_id' => '1',
            'client' => '1',
            'branch' => '2',
            'seal_number' => '100002',
            'currency' => '1',
            'd1000' => '1000',
            'd1000_category' => '1',
            'd1000_amount' => '20000000',
            'amount' => '20000000',
            'added_by' => 'Ernest',
        ]);
        DB::table('bundleconfirmationbags')->insert([
            'bundleconfirmation_id' => '3',
            'client' => '2',
            'branch' => '1',
            'seal_number' => '100003',
            'currency' => '1',
            'd1000' => '1000',
            'd1000_category' => '1',
            'd1000_amount' => '15000000',
            'amount' => '15000000',
            'added_by' => 'Ernest',
        ]);
    }
}
