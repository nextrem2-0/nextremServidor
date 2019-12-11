<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class CategoriasModel extends Model
{
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    //protected $key = 'id';
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table  = "categorias";

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
