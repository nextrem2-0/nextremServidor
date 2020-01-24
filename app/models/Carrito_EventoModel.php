<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Carrito_EventoModel extends Model
{
    /**
     * Aquellos campos que podrán ser modificados.
     *
     * @var string
     */
    protected $fillable = ['carrito_id','evento_id','plazas'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table  = "carrito_evento";
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
