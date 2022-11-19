<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRutaDestinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruta_destinos', function (Blueprint $table) {

            $table->id();
            $table->string('departamento_destino');
            $table->string('provincia_destino');
            $table->string('distrito_destino');
            $table->timestamps();
            $table->unsignedBigInteger('vehiculos_id');
            $table->foreign('vehiculos_id')->references('id')->on('vehiculo')->onDelete('cascade');

            $table->unsignedBigInteger('distrito_id');
            $table->foreign('distrito_id')->references('id')->on('distritos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ruta_destinos');
    }
}
