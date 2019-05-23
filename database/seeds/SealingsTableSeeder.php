<?php

use Illuminate\Database\Seeder;

class SealingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sealings')->insert([
            'strim' => 'CBN',
            'sealing_title' => 'Test Notice',
            'client' => '1',
            'amount' => '458000000',
            'seal_number' => '100001',
        ]);
        DB::table('sealings')->insert([
            'strim' => 'Others',
            'sealing_title' => 'Test Notice',
            'client' => '2',
            'amount' => '658000000',
            'seal_number' => '100001',
        ]);
        DB::table('sealings')->insert([
            'strim' => 'CBN',
            'sealing_title' => 'Test Notice',
            'client' => '2',
            'amount' => '858000000',
            'seal_number' => '100001',
        ]);
        DB::table('sealings')->insert([
            'strim' => 'Others',
            'sealing_title' => 'Test Notice',
            'client' => '1',
            'amount' => '998000000',
            'seal_number' => '100001',
        ]);
    }
}
