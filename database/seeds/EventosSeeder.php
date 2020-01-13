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
                'nombre' => 'Escalando los Alpes',
                'resumen' => 'Sabado 25 y Domingo 26 de enero',
                'capacidad' => '4',
                'precio' => '412.36',
                'dificultad' => '3',
                'material' => '1',
                'deporte_id' => '1',
                'creador_id' => '1'
            ],
            [
                'nombre' => 'Buceo Deportivo',
                'resumen' => 'Con escafandra autonoma',
                'capacidad' => '7',
                'precio' => '316.76',
                'dificultad' => '1',
                'material' => '1',
                'deporte_id' => '2',
                'creador_id' => '4'
            ],
            [
                'nombre' => 'Biathlon Esqui',
                'resumen' => 'A esquiar!',
                'capacidad' => '2',
                'precio' => '20.99',
                'dificultad' => '3',
                'material' => '1',
                'deporte_id' => '3',
                'creador_id' => '2'
            ],
            [
                'nombre' => 'Marmotas Rafting',
                'resumen' => 'Un fin de semana con carreras',
                'capacidad' => '6',
                'precio' => '10.59',
                'dificultad' => '2',
                'material' => '0',
                'deporte_id' => '4',
                'creador_id' => '5'
            ],
            [
                'nombre' => 'Longboard Contest',
                'resumen' => 'Competicion de Longboard',
                'capacidad' => '10',
                'precio' => '35.65',
                'dificultad' => '2',
                'material' => '1',
                'deporte_id' => '5',
                'creador_id' => '5'
            ],
            [
                'nombre' => 'Esqui y Snow',
                'resumen' => 'Material excelente',
                'capacidad' => '8',
                'precio' => '27.79',
                'dificultad' => '2',
                'material' => '1',
                'deporte_id' => '3',
                'creador_id' => '3'
            ]
        ]);
    }
}
