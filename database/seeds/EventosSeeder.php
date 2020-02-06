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
                'plazas_totales' => '4',
                'plazas_ocupadas' => '0',
                'precio' => '412.36',
                'dificultad' => '3',
                'material' => '1',
                'imagen' => 'climb1.jpg',
                'deporte_id' => '1',
                'creador_id' => '1'
            ],
            [
                'nombre' => 'Buceo Deportivo',
                'resumen' => 'Con escafandra autonoma',
                'plazas_totales' => '7',
                'plazas_ocupadas' => '0',
                'precio' => '316.76',
                'dificultad' => '1',
                'material' => '1',
                'imagen' => 'buceo1.jpg',
                'deporte_id' => '2',
                'creador_id' => '4'
            ],
            [
                'nombre' => 'Biathlon Esqui',
                'resumen' => 'A esquiar!',
                'plazas_totales' => '2',
                'plazas_ocupadas' => '0',
                'precio' => '20.99',
                'dificultad' => '3',
                'material' => '1',
                'imagen' => 'snow1.jpg',
                'deporte_id' => '3',
                'creador_id' => '2'
            ],
            [
                'nombre' => 'Marmotas Rafting',
                'resumen' => 'Un fin de semana con carreras',
                'plazas_totales' => '6',
                'plazas_ocupadas' => '0',
                'precio' => '10.59',
                'dificultad' => '2',
                'material' => '0',
                'imagen' => 'evento.jpg',
                'deporte_id' => '4',
                'creador_id' => '5'
            ],
            [
                'nombre' => 'Longboard Contest',
                'resumen' => 'Competicion de Longboard',
                'plazas_totales' => '10',
                'plazas_ocupadas' => '0',
                'precio' => '35.65',
                'dificultad' => '2',
                'material' => '1',
                'imagen' => 'snow2.jpg',
                'deporte_id' => '3',
                'creador_id' => '5'
            ],
            [
                'nombre' => 'Esqui y Snow',
                'resumen' => 'Material excelente',
                'plazas_totales' => '8',
                'plazas_ocupadas' => '0',
                'precio' => '27.79',
                'dificultad' => '2',
                'material' => '1',
                'imagen' => 'snow3.jpg',
                'deporte_id' => '3',
                'creador_id' => '3'
            ],
            [
                'nombre' => 'Clases de escalada',
                'resumen' => 'Todos los findes de Marzo',
                'plazas_totales' => '20',
                'plazas_ocupadas' => '0',
                'precio' => '20.36',
                'dificultad' => '1',
                'material' => '1',
                'imagen' => 'climb2.jpg',
                'deporte_id' => '1',
                'creador_id' => '1'
            ],
            [
                'nombre' => 'Escalada de extrema',
                'resumen' => 'Convencion de escaladores',
                'plazas_totales' => '100',
                'plazas_ocupadas' => '0',
                'precio' => '500.36',
                'dificultad' => '3',
                'material' => '1',
                'imagen' => 'climb3.jpg',
                'deporte_id' => '1',
                'creador_id' => '1'
            ],
            [
                'nombre' => 'Liga de escalada',
                'resumen' => 'liga de escalada juvenil',
                'plazas_totales' => '20',
                'plazas_ocupadas' => '0',
                'precio' => '10.36',
                'dificultad' => '2',
                'material' => '1',
                'imagen' => 'evento.jpg',
                'deporte_id' => '1',
                'creador_id' => '1'
            ],
            [
                'nombre' => 'Campeonato de buceo',
                'resumen' => 'XXII Campeonato nacional de buceo',
                'plazas_totales' => '10',
                'plazas_ocupadas' => '0',
                'precio' => '300.36',
                'dificultad' => '3',
                'material' => '1',
                'imagen' => 'buceo2.jpg',
                'deporte_id' => '2',
                'creador_id' => '1'
            ],
            [
                'nombre' => 'Buceo extremo',
                'resumen' => 'Ven a bucear a las zonas mas extremas',
                'plazas_totales' => '40',
                'plazas_ocupadas' => '0',
                'precio' => '500.36',
                'dificultad' => '3',
                'material' => '0',
                'imagen' => 'buceo3.jpg',
                'deporte_id' => '2',
                'creador_id' => '1'
            ],
            [
                'nombre' => 'Practicas buceo',
                'resumen' => 'Mejora tus habilidades de buceo',
                'plazas_totales' => '30',
                'plazas_ocupadas' => '0',
                'precio' => '200',
                'dificultad' => '1',
                'material' => '1',
                'imagen' => 'evento.jpg',
                'deporte_id' => '2',
                'creador_id' => '1'
            ],
            [
                'nombre' => 'Esquiando en los alpes',
                'resumen' => 'Una experiencia unica',
                'plazas_totales' => '5',
                'plazas_ocupadas' => '0',
                'precio' => '900',
                'dificultad' => '3',
                'material' => '0',
                'imagen' => 'evento.jpg',
                'deporte_id' => '3',
                'creador_id' => '1'
            ],
            [
                'nombre' => 'Practicas de Esquí',
                'resumen' => 'Mejora tus habilidades de buceo',
                'plazas_totales' => '30',
                'plazas_ocupadas' => '0',
                'precio' => '20',
                'dificultad' => '1',
                'material' => '1',
                'imagen' => 'evento.jpg',
                'deporte_id' => '3',
                'creador_id' => '1'
            ],
            [
                'nombre' => 'Quedada de esquiadores',
                'resumen' => 'Reunete con los mejores esquiadores del país',
                'plazas_totales' => '700',
                'plazas_ocupadas' => '0',
                'precio' => '60',
                'dificultad' => '2',
                'material' => '0',
                'imagen' => 'evento.jpg',
                'deporte_id' => '3',
                'creador_id' => '1'
            ],
            [
                'nombre' => 'Campeonato Rafting',
                'resumen' => 'XXII Campeonato nacional de rafting',
                'plazas_totales' => '10',
                'plazas_ocupadas' => '0',
                'precio' => '140',
                'dificultad' => '3',
                'material' => '0',
                'imagen' => 'rafting1.jpg',
                'deporte_id' => '4',
                'creador_id' => '1'
            ],
            [
                'nombre' => 'Entrenamiento Rafting',
                'resumen' => 'Aprende rafting',
                'plazas_totales' => '40',
                'plazas_ocupadas' => '0',
                'precio' => '250',
                'dificultad' => '1',
                'material' => '1',
                'imagen' => 'rafting2.jpg',
                'deporte_id' => '4',
                'creador_id' => '1'
            ],
            [
                'nombre' => 'Rafting Amazonas',
                'resumen' => 'Una experiencia inolvidable',
                'plazas_totales' => '20',
                'plazas_ocupadas' => '0',
                'precio' => '2500',
                'dificultad' => '3',
                'material' => '1',
                'imagen' => 'rafting3.jpg',
                'deporte_id' => '4',
                'creador_id' => '1'
            ],
            [
                'nombre' => 'Clases de surf',
                'resumen' => 'Clases de surf nivel principiante',
                'plazas_totales' => '20',
                'plazas_ocupadas' => '0',
                'precio' => '15',
                'dificultad' => '1',
                'material' => '1',
                'imagen' => 'surf1.jpg',
                'deporte_id' => '5',
                'creador_id' => '1'
            ],
            [
                'nombre' => 'Campeonato de surf',
                'resumen' => 'XXII Campeonato nacional de surf',
                'plazas_totales' => '10',
                'plazas_ocupadas' => '0',
                'precio' => '300',
                'dificultad' => '3',
                'material' => '0',
                'imagen' => 'surf2.jpg',
                'deporte_id' => '5',
                'creador_id' => '1'
            ],
            [
                'nombre' => 'Surfeando Australia',
                'resumen' => 'Una experiencia única',
                'plazas_totales' => '5',
                'plazas_ocupadas' => '0',
                'precio' => '1400',
                'dificultad' => '3',
                'material' => '1',
                'imagen' => 'surf3.jpg',
                'deporte_id' => '5',
                'creador_id' => '1'
            ]
            
        ]);
    }
}
