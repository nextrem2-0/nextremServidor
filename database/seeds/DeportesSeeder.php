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
            [
                'nombre' => 'Escalada',
                'icono' => 'icono-escalada.png'
            ],
            [
                'nombre' => 'Buceo',
                'icono' => 'icono-buceo.png'
            ],
            [
                'nombre' => 'Esqui',
                'icono' => 'icono-esqui.png'
            ],
            [
                'nombre' => 'Rafting',
                'icono' => 'icono-rafting.png'
            ],
            [
                'nombre' => 'Surf',
                'icono' => 'icono-surf.png'
            ]
        ]);
    }
}
