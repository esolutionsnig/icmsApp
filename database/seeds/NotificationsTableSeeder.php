<?php

use Illuminate\Database\Seeder;

class NotificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notifications')->insert([
            'username' => 'judenka',
            'subject' => 'Test Notice',
            'message' => '100001 noone for now',
        ]);
        DB::table('notifications')->insert([
            'username' => 'judenka',
            'subject' => 'Test Notice',
            'message' => '100001 noone for now',
        ]);
        DB::table('notifications')->insert([
            'username' => 'judenka',
            'subject' => 'Test Notice',
            'message' => '100001 noone for now',
        ]);
        DB::table('notifications')->insert([
            'username' => 'judenka',
            'subject' => 'Test Notice',
            'message' => '100001 noone for now',
        ]);
    }
}
