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
            [
                'isbusiness' => '0',
                'username' => 'josito',
                'email' => 'josito@gmail.com',
                'password' => 'josito'
            ],
            [
                'isbusiness' => '0',
                'username' => 'pepa',
                'email' => 'pepa@gmail.com',
                'password' => 'pepa'
            ],
            [
                'isbusiness' => '1',
                'username' => 'monkeySL',
                'email' => 'monkeysl@gmail.com',
                'password' => 'monkeySL'
            ],
            [
                'isbusiness' => '1',
                'username' => 'turiaExtrems',
                'email' => 'turiaExtrems@gmail.com',
                'password' => 'turiaExtrems'
            ],
            [
                'isbusiness' => '1',
                'username' => 'OverBoards',
                'email' => 'OverBoards@gmail.com',
                'password' => 'OverBoards'
            ]
        ]);
    }
}
