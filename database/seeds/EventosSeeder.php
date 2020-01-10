<?php

use Illuminate\Database\Seeder;

class EventosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eventos')->insert([
            [
                'nombre' => 'Evento1',
                'resumen' => 'evento extremo',
                'capacidad' => '4',
                'precio' => '412.36',
                'dificultad' => '3',
                'material' => '1',
                'deporte_id' => '1',
                'creador_id' => '1'
            ]
        ]);
    }
}
