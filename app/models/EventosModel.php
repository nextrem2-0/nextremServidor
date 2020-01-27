<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class EventosModel extends Model
{
    /**
     * Aquellos campos que podrán ser modificados.
     *
     * @var string
     */
    protected $fillable = ['nombre','resumen','plazas_totales','plazas_ocupadas','precio','dificultad','material','deporte_id','creador_id'];
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table  = "eventos";

    public function carritos()
    {
        return $this->belongsToMany('App\models\CarritosModel');
    }

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
