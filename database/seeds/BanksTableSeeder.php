<?php

use Illuminate\Database\Seeder;

class BanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banks')->insert([
            'bank_name' => 'Access Bank Plc',
            'bank_code' => 'ACC',
        ]);
        DB::table('banks')->insert([
            'bank_name' => 'Diamond Bank Plc',
            'bank_code' => 'DB',
        ]);
        DB::table('banks')->insert([
            'bank_name' => 'Fidelity Bank Plc',
            'bank_code' => 'FB',
        ]);
        DB::table('banks')->insert([
            'bank_name' => 'First City Monument Bank Plc',
            'bank_code' => 'FCMB',
        ]);
        DB::table('banks')->insert([
            'bank_name' => 'First Bank of Nigeria Plc',
            'bank_code' => 'FBN',
        ]);
        DB::table('banks')->insert([
            'bank_name' => 'Guaranty Trust Bank Plc',
            'bank_code' => 'GTB',
        ]);
        DB::table('banks')->insert([
            'bank_name' => 'Union Bank of Nigeria Plc',
            'bank_code' => 'UBN',
        ]);
        DB::table('banks')->insert([
            'bank_name' => 'United Bank for Africa Plc',
            'bank_code' => 'UBA',
        ]);
        DB::table('banks')->insert([
            'bank_name' => 'Zenith International Bank Plc',
            'bank_code' => 'ZIB',
        ]);
        DB::table('banks')->insert([
            'bank_name' => 'City Bank Ngeria Ltd',
            'bank_code' => 'CBNL',
        ]);
        DB::table('banks')->insert([
            'bank_name' => 'Ecobank Nigeria Plc',
            'bank_code' => 'ENP',
        ]);
        DB::table('banks')->insert([
            'bank_name' => 'Heritage Bank Company Ltd',
            'bank_code' => 'HBC',
        ]);
        DB::table('banks')->insert([
            'bank_name' => 'Keystone Bank Limted',
            'bank_code' => 'KBL',
        ]);
    }
}
