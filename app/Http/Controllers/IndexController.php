<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\CategoriasModel;
use App\models\DeportesModel;
use App\models\ImagesModel;
use App\models\EventosModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class IndexController extends Controller
{
    public function getImages()
    {
        $imagesDB = ImagesModel::all();
        $imagenes = array();
        foreach ($imagesDB as $value) {
            if (Storage::disk('public')->exists($value['nombre'])) {
                /* array_push($imagenes, "public" . Storage::url($value['nombre'])); */
                array_push($imagenes, $value['nombre']);
            }
        }
        return $imagenes;
    }
    public function getTextInicio()
    {
        return config('variables.textInicio');
    }

    public function getDeportes()
    {
        $deportes = DeportesModel::all();
        return $deportes;
    }

    public function getEventos()
    {
        $eventos = EventosModel::all();
        return $eventos;
    }

    public function getEventosOfSport($id)
    {
        $eventos = EventosModel::where('deporte_id', $id)->get();
        return $eventos;
    }

    public function getEventosMasOcupados()
    {
        $eventos = EventosModel::whereRAW('plazas_totales - plazas_ocupadas !=0 ')->orderByRaw('plazas_totales - plazas_ocupadas ASC')->take(3)->get();
        return $eventos;
    }

    public function getCategorias()
    {
        $categoria = CategoriasModel::all();
        return $categoria;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //echo($request);
        //Instanciamos la clase 
        $categoria = new CategoriasModel;
        //Declaramos el nombre con el nombre enviado en el request
        $categoria->nombre = $request->nombre;
        //Guardamos el cambio en nuestro modelo
        $categoria->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
