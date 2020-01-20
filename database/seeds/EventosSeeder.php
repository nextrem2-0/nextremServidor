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
            ],
            [
                'nombre' => 'Clases de escalada',
                'resumen' => 'Todos los findes de Marzo',
                'capacidad' => '20',
                'precio' => '20.36',
                'dificultad' => '1',
                'material' => '1',
                'deporte_id' => '1',
                'creador_id' => '1'
            ],
            [
                'nombre' => 'Escalada de extrema',
                'resumen' => 'Convencion de escaladores',
                'capacidad' => '100',
                'precio' => '500.36',
                'dificultad' => '3',
                'material' => '1',
                'deporte_id' => '1',
                'creador_id' => '1'
            ],
            [
                'nombre' => 'Liga de escalada',
                'resumen' => 'liga de escalada juvenil',
                'capacidad' => '20',
                'precio' => '10.36',
                'dificultad' => '2',
                'material' => '1',
                'deporte_id' => '1',
                'creador_id' => '1'
            ],
            [
                'nombre' => 'Campeonato de buceo',
                'resumen' => 'XXII Campeonato nacional de buceo',
                'capacidad' => '10',
                'precio' => '300.36',
                'dificultad' => '3',
                'material' => '1',
                'deporte_id' => '2',
                'creador_id' => '1'
            ],
            [
                'nombre' => 'Buceo extremo',
                'resumen' => 'Ven a bucear a las zonas mas extremas',
                'capacidad' => '40',
                'precio' => '500.36',
                'dificultad' => '3',
                'material' => '0',
                'deporte_id' => '2',
                'creador_id' => '1'
            ],
            [
                'nombre' => 'Practicas buceo',
                'resumen' => 'Mejora tus habilidades de buceo',
                'capacidad' => '30',
                'precio' => '200',
                'dificultad' => '1',
                'material' => '1',
                'deporte_id' => '2',
                'creador_id' => '1'
            ],
            [
                'nombre' => 'Esquiando en los alpes',
                'resumen' => 'Una experiencia unica',
                'capacidad' => '5',
                'precio' => '900',
                'dificultad' => '3',
                'material' => '0',
                'deporte_id' => '3',
                'creador_id' => '1'
            ],
            [
                'nombre' => 'Practicas de Esquí',
                'resumen' => 'Mejora tus habilidades de buceo',
                'capacidad' => '30',
                'precio' => '20',
                'dificultad' => '1',
                'material' => '1',
                'deporte_id' => '3',
                'creador_id' => '1'
            ],
            [
                'nombre' => 'Quedada de esquiadores',
                'resumen' => 'Reunete con los mejores esquiadores del país',
                'capacidad' => '700',
                'precio' => '60',
                'dificultad' => '2',
                'material' => '0',
                'deporte_id' => '3',
                'creador_id' => '1'
            ],
            [
                'nombre' => 'Campeonato Rafting',
                'resumen' => 'XXII Campeonato nacional de rafting',
                'capacidad' => '10',
                'precio' => '140',
                'dificultad' => '3',
                'material' => '0',
                'deporte_id' => '4',
                'creador_id' => '1'
            ],
            [
                'nombre' => 'Entrenamiento Rafting',
                'resumen' => 'Aprende rafting',
                'capacidad' => '40',
                'precio' => '250',
                'dificultad' => '1',
                'material' => '1',
                'deporte_id' => '4',
                'creador_id' => '1'
            ],
            [
                'nombre' => 'Rafting Amazonas',
                'resumen' => 'Una experiencia inolvidable',
                'capacidad' => '20',
                'precio' => '2500',
                'dificultad' => '3',
                'material' => '1',
                'deporte_id' => '4',
                'creador_id' => '1'
            ],
            [
                'nombre' => 'Clases de surf',
                'resumen' => 'Clases de surf nivel principiante',
                'capacidad' => '20',
                'precio' => '15',
                'dificultad' => '1',
                'material' => '1',
                'deporte_id' => '5',
                'creador_id' => '1'
            ],
            [
                'nombre' => 'Campeonato de surf',
                'resumen' => 'XXII Campeonato nacional de rafting',
                'capacidad' => '10',
                'precio' => '300',
                'dificultad' => '3',
                'material' => '0',
                'deporte_id' => '5',
                'creador_id' => '1'
            ],
            [
                'nombre' => 'Surfeando Australia',
                'resumen' => 'Una experiencia única',
                'capacidad' => '5',
                'precio' => '1400',
                'dificultad' => '3',
                'material' => '1',
                'deporte_id' => '5',
                'creador_id' => '1'
            ]
            
        ]);
    }
}
