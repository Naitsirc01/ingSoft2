<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadConveniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad_convenios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('empresa');
            $table->integer('convenioid')->unsigned()->nullable();
            $table->date('fecha_comienzo');
            $table->date('duracion');
            $table->integer('indicadorid')->unsigned()->nullable();
            $table->foreign('convenioid')->references('id')
                ->on('convenios')->onDelete('cascade');
            $table->foreign('indicadorid')->references('id')
                ->on('indicadores')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividad_convenios');
    }
}
