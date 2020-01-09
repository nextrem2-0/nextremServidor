<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['isbusiness' => '0',
            'username' => 'josito',
            'email' => 'josito@gmail.com',
            'password' => 'josito']
        ]);
    }
}
