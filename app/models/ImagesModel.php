<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class ImagesModel extends Model
{
    /**
     * Aquellos campos que podrán ser modificados.
     *
     * @var string
     */
    protected $fillable = ['nombre'];
    
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
    protected $table  = "images";

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
