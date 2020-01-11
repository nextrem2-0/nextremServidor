<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
                'password' => Hash::make('josito')
            ],
            [
                'isbusiness' => '0',
                'username' => 'pepa',
                'email' => 'pepa@gmail.com',
                'password' => Hash::make('pepa')
            ],
            [
                'isbusiness' => '1',
                'username' => 'monkeySL',
                'email' => 'monkeysl@gmail.com',
                'password' =>  Hash::make('monkeySL')
            ],
            [
                'isbusiness' => '1',
                'username' => 'turiaExtrems',
                'email' => 'turiaExtrems@gmail.com',
                'password' =>  Hash::make('turiaExtrems')
            ],
            [
                'isbusiness' => '1',
                'username' => 'OverBoards',
                'email' => 'OverBoards@gmail.com',
                'password' =>  Hash::make('OverBoards')
            ]
        ]);
    }
}
