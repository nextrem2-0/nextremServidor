<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class CarritosModel extends Model
{
    /**
     * Aquellos campos que podrán ser modificados.
     *
     * @var string
     */
    protected $fillable = ['usuario_id','precio'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table  = "carritos";

    public function eventos()
    {
        return $this->belongsToMany('App\models\EventosModel');
    }

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
