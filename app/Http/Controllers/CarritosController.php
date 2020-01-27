<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\CarritosModel;
use App\models\Carrito_EventoModel;
use App\models\EventosModel;

class CarritosController extends Controller
{
    public function store(Request $request)
    {
        $carrito =  CarritosModel::create([
            'usuario_id' => $request->get('idUsusario'),
            'precio' => $request->get('precio'),
        ]);
        foreach ($request->eventos as $evento) {
            Carrito_EventoModel::create([
                'carrito_id' => $carrito->id,
                'evento_id' => $evento['id_evento'],
                'plazas' => $evento['plazas'],
            ]);
            EventosModel::where('id', $evento['id_evento'])->increment('plazas_ocupadas', $evento['plazas']);
        }
    }

    public function getEventosOfUser($id)
    {
        return EventosModel::whereIn('id', function ($query) use ($id) {
            $query->select('evento_id')
                ->from(with(new Carrito_EventoModel)->getTable())
                ->join('carritos', 'carrito_evento.carrito_id', '=', 'carritos.id')
                ->where('carritos.usuario_id', $id);
        })->get();
    }
}
