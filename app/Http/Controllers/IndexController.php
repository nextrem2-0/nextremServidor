<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\CategoriasModel;
use App\models\ImagesModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class IndexController extends Controller
{
    public function getImages()
    {
        /* $url = Storage::url('carrusel2.jpg');
        return "<img src='".$url."'/>"; */
        
        
        /* $imagesFiles = Storage::files('public');
        $exists = Storage::disk('public')->exists('banner.jpg');
        return $exists.''; */

        $imagesDB = ImagesModel::all();
        //return $imagesDB; 

        $imagenes = array();
        foreach ($imagesDB as $value) {
            if (Storage::disk('public')->exists($value['nombre'])) {
                array_push($imagenes,"<img src='".Storage::url($value['nombre'])."'/>");
            }
        }
        return $imagenes[2];
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
        //Solicitamos al modelo la categoria con el id solicitado por GET.
        $categoria = CategoriasModel::all();
        return $categoria;
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
