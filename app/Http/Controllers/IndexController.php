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

    public function storeEvento(Request $request)
    {
        $evento = EventosModel::create([
            'nombre' => $request->nombre,
            'resumen' =>  $request->resumen,
            'plazas_totales' => $request->plazas_totales,
            'plazas_ocupadas' =>  $request->plazas_ocupadas,
            'precio' => $request->precio,
            'dificultad' =>  $request->dificultad,
            'material' => $request->material,
            'deporte_id' =>  $request->deporte_id,
            'creador_id' =>  $request->creador_id,
        ]);

       /*  if (request()->imagen != null) {
            $eventImgName =  $evento->id . '_event.'. request()->imagen->getClientOriginalExtension();
            $request->imagen->storeAs('eventos', $eventImgName);
            $evento->imagen  = $eventImgName;
            $evento->save();
        } */
    }
    public function editarEvento(Request $request)
    {
        $id =  $request->get('id');

        foreach ($request->except(['id', 'imagen']) as $key => $part) {
            EventosModel::where('id', '=', $id)->update(array($key => $part));
        }
        /* $imagen =  $request->get('imagen');
        if ($imagen != null ||  $imagen != "") {

            $nombreAntiguoImg = EventosModel::where('id', $id)->value('imagen');
            Storage::delete($nombreAntiguoImg);
            $eventImgName =  $request->id . '_event' . time() . '.' . request()->imagen->getClientOriginalExtension();
            $request->imagen->storeAs('eventos', $eventImgName);
            EventosModel::where('id', '=', $id)->update(array('imagen' => $eventImgName));
        } */
        /* 
        $nombre =  $request->get('nombre');
        if ($nombre != null ||  $nombre != "") {
            EventosModel::where('id', $id)->update(array('nombre' => $nombre));
        }
        $resumen =  $request->get('resumen');
        if ($resumen != null ||  $resumen != "") {
            EventosModel::where('id', $id)->update(array('resumen' => $resumen));
        }
        $plazas_totales =  $request->get('plazas_totales');
        if ($plazas_totales != null ||  $plazas_totales != "") {
            EventosModel::where('id', $id)->update(array('plazas_totales' => $plazas_totales));
        }
        $plazas_ocupadas =  $request->get('plazas_ocupadas');
        if ($plazas_ocupadas != null ||  $plazas_ocupadas != "") {
            EventosModel::where('id', $id)->update(array('plazas_ocupadas' => $plazas_ocupadas));
        }
        $precio =  $request->get('precio');
        if ($precio != null ||  $precio != "") {
            EventosModel::where('id', $id)->update(array('precio' => $precio));
        }
        $dificultad =  $request->get('dificultad');
        if ($dificultad != null ||  $dificultad != "") {
            EventosModel::where('id', $id)->update(array('dificultad' => $dificultad));
        }
        $material =  $request->get('material');
        if ($material != null ||  $material != "") {
            EventosModel::where('id', $id)->update(array('material' => $material));
        }
        $imagen =  $request->get('imagen');
        if ($imagen != null ||  $imagen != "") {
            EventosModel::where('id', $id)->update(array('imagen' => $imagen));
        }
        $deporte_id =  $request->get('deporte_id');
        if ($deporte_id != null ||  $deporte_id != "") {
            EventosModel::where('id', $id)->update(array('deporte_id' => $deporte_id));
        } */
    }

    public function destroyEvento($id)
    {
        if ($id != null) {
            EventosModel::where('id', '=', $id)->delete();
        }
    }


    public function getEventosMasOcupados()
    {
        $eventos = EventosModel::whereRAW('plazas_totales - plazas_ocupadas !=0 ')->orderByRaw('plazas_totales - plazas_ocupadas ASC')->take(3)->get();
        return $eventos;
    }

    public function getEventosCreadosOfUser($id)
    {
        return  EventosModel::where('creador_id', '=', $id)->get();
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
