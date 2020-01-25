<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasTable extends Migration
{
    public $timestamps = false;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
        });
        Schema::create('deportes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('icono');
        });
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias');
        Schema::dropIfExists('deportes');
        Schema::dropIfExists('images');
    }
}
