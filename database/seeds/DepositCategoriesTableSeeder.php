<?php

use Illuminate\Database\Seeder;

class DepositCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('depositcategories')->insert([
            'name' => 'Mint',
        ]);
        DB::table('depositcategories')->insert([
            'name' => 'Unfit Notes',
        ]);
        DB::table('depositcategories')->insert([
            'name' => 'ATM Fit Notes',
        ]);
        DB::table('depositcategories')->insert([
            'name' => 'Teller Fit Notes',
        ]);
        DB::table('depositcategories')->insert([
            'name' => 'MUtilated Notes',
        ]);
        DB::table('depositcategories')->insert([
            'name' => 'Awaiting Evaluation (Unprocessed)',
        ]);
        DB::table('depositcategories')->insert([
            'name' => 'Awaiting Evaluation (Vault)',
        ]);
        DB::table('depositcategories')->insert([
            'name' => 'Awaiting Evaluation (Processing Floor)',
        ]);
        DB::table('depositcategories')->insert([
            'name' => 'AC Awaiting Confirmation',
        ]);
        DB::table('depositcategories')->insert([
            'name' => 'Others',
        ]);
    }
}
