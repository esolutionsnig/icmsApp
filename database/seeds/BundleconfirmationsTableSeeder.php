<?php

use Illuminate\Database\Seeder;

class BundleconfirmationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bundleconfirmations')->insert([
            'bc_title' => 'Access Bank Plc Friday Bundle Confirmation',
            'client_id' => '1',
            'strim' => 'CBN',
            'conslocation' => '1',
            'audit_trail_number' => 'ACC-NNN-NUM-123',
            'added_by' => 'Ernest',
            'confirmation_done' => 'NO',
        ]);
        DB::table('bundleconfirmations')->insert([
            'bc_title' => 'Access Bank Plc Saturday Bundle Confirmation',
            'client_id' => '1',
            'strim' => 'CBN',
            'conslocation' => '1',
            'audit_trail_number' => 'ACC-NNN-NUM-123',
            'added_by' => 'Ernest',
            'confirmation_done' => 'NO',
        ]);
        DB::table('bundleconfirmations')->insert([
            'bc_title' => 'Diamond Bank Plc Friday Bundle Confirmation',
            'client_id' => '1',
            'strim' => 'CBN',
            'conslocation' => '1',
            'audit_trail_number' => 'ACC-NNN-NUM-123',
            'added_by' => 'Ernest',
            'confirmation_done' => 'NO',
        ]);
    }
}
