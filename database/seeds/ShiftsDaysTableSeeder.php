<?php

use Illuminate\Database\Seeder;

class ShiftsDaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shiftsdays')->insert([
            'day_id' => '1',
            'stitle' => 'Test Notice',
            'sshift' => 'Morning',
            'sstarted_by' => 'judenka',
            'sstarted_on' => '85585100001',
        ]);
        DB::table('shiftsdays')->insert([
            'day_id' => '1',
            'stitle' => 'Test Notice',
            'sshift' => 'Morning',
            'sstarted_by' => 'judenka',
            'sstarted_on' => '85585100001',
        ]);
        DB::table('shiftsdays')->insert([
            'day_id' => '1',
            'stitle' => 'Test Notice',
            'sshift' => 'Morning',
            'sstarted_by' => 'judenka',
            'sstarted_on' => '85585100001',
        ]);
        DB::table('shiftsdays')->insert([
            'day_id' => '1',
            'stitle' => 'Test Notice',
            'sshift' => 'Morning',
            'sstarted_by' => 'judenka',
            'sstarted_on' => '85585100001',
        ]);
        DB::table('shiftsdays')->insert([
            'day_id' => '1',
            'stitle' => 'Test Notice',
            'sshift' => 'Morning',
            'sstarted_by' => 'judenka',
            'sstarted_on' => '85585100001',
        ]);
    }
}
