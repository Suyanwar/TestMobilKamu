<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset User
        DB::table('users')->delete();

        // Seed New User
        DB::table('users')->insert([
            'name'      => 'Suyanwar',
            'email'     => 'Suyanwar.wawang@gmail.com',
            'password'  => bcrypt('123456'),
            'api_token' => str_random(100)
        ]);
        DB::table('users')->insert([
            'name'      => 'Wawang',
            'email'     => 'Suyanwar.wawang1@gmail.com',
            'password'  => bcrypt('123456'),
            'api_token' => str_random(100)
        ]);
    }
}
