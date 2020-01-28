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
        $idCarrito = CarritosModel::select('id', 'confirmado')->where('usuario_id', $request->get('idUsusario'))->orderBy('id', 'desc')->take(1)->get();
        if ($request->get('confirmado') == 0) {
            if (count($idCarrito) == 0 || $idCarrito[0]['confirmado'] == 1) {
                $carrito = CarritosModel::create([
                    'usuario_id' => $request->get('idUsusario'),
                    'precio' => $request->get('precio'),
                    'confirmado' => $request->get('confirmado'),
                ]);
                $idCarrito = $carrito->id;
            } else {
                $idCarrito = $idCarrito[0]['id'];
            }
            foreach ($request->eventos as $evento) {
                Carrito_EventoModel::create([
                    'carrito_id' => $idCarrito,
                    'evento_id' => $evento['id_evento'],
                    'plazas' => $evento['plazas'],
                ]);
                EventosModel::where('id', $evento['id_evento'])->increment('plazas_ocupadas', $evento['plazas']);
            }
        } elseif ($request->get('confirmado') == 1) {
            CarritosModel::where('id', $idCarrito[0]['id'])->update(array('confirmado' => 1));
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
