<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    /**
     * Aquellos campos que podrán ser modificados.
     *
     * @var array
     */
    protected $fillable = ['isbusiness','username','email','password','avatar'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password','api_token'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table  = "usuarios";

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
