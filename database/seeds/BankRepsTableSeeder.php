<?php

use Illuminate\Database\Seeder;

class BankRepsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bankreps')->insert([
            'username' => 'judenka',
            'banks_id' => '1',
            'branch_id' => '1',
            'added_by' => 'Ernest',
        ]);
        DB::table('bankreps')->insert([
            'username' => 'ishola',
            'banks_id' => '1',
            'branch_id' => '2',
            'added_by' => 'Ernest',
        ]);
        DB::table('bankreps')->insert([
            'username' => 'janey',
            'banks_id' => '1',
            'branch_id' => '1',
            'added_by' => 'Ernest',
        ]);
        DB::table('bankreps')->insert([
            'username' => 'smith',
            'banks_id' => '2',
            'branch_id' => '1',
            'added_by' => 'Ernest',
        ]);
        DB::table('bankreps')->insert([
            'username' => 'walex',
            'banks_id' => '2',
            'branch_id' => '2',
            'added_by' => 'Ernest',
        ]);
        DB::table('bankreps')->insert([
            'username' => 'midred',
            'banks_id' => '2',
            'branch_id' => '1',
            'added_by' => 'Ernest',
        ]);
    }
}
