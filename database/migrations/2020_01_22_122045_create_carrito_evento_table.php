<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarritoEventoTable extends Migration
{
    public $timestamps = false;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrito_evento', function (Blueprint $table) {
            $table->integer('carrito_id')->unsigned()->nullable();
            $table->foreign('carrito_id')->references('id')
                ->on('carritos')->onDelete('cascade');

            $table->integer('evento_id')->unsigned()->nullable();
            $table->foreign('evento_id')->references('id')
                ->on('eventos')->onDelete('cascade');

            $table->integer('plazas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrito_evento');
    }
}
