<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    public $timestamps = false;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('resumen');
            $table->integer('plazas_totales');
            $table->integer('plazas_ocupadas');
            $table->decimal('precio', 6, 2);
            $table->enum('dificultad', ['1', '2', '3']);
            $table->boolean('material');
            $table->string('imagen')->default('evento.png');
            $table->integer('deporte_id')->unsigned();
            $table->foreign('deporte_id')->references('id')->on('deportes');
            $table->integer('creador_id')->unsigned();
            $table->foreign('creador_id')->references('id')->on('users');

            /* $table->dropForeign('answers_user_id_foreign');
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade'); */
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}
