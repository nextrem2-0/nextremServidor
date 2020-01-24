<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\CarritosModel;
use App\models\Carrito_EventoModel;

class CarritosController extends Controller
{
    public function store(Request $request)
    {
        return $request;
        $carrito = collect();

        foreach ($request->usuario_id as $usuario_id) {

            $carrito->push(
                CarritosModel::make([
                    'usuario_id'   => $usuario_id,
                    'precio' => $request->precio
                ])
            );
        }

        DB::table('carritos')->insert($carrito);

        //return redirect()->route('project-miles.index');
    }
}
