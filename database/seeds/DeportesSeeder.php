<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeportesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deportes')->insert([
            ['nombre' => 'Buceo'],
            ['nombre' => 'Rafting'],
            ['nombre' => 'Escalada'],
            ['nombre' => 'Surf'],
            ['nombre' => 'Esquí']
        ]);
    }
}
