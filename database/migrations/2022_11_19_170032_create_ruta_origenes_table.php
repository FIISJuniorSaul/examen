<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRutaOrigenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruta_origenes', function (Blueprint $table) {
            $table->id();
            $table->string('departamento_origen');
            $table->string('provincia_origen');
            $table->timestamps();
            $table->unsignedBigInteger('vehiculos_id');
            $table->foreign('vehiculos_id')->references('id')->on('vehiculo')->onDelete('cascade');

            $table->unsignedBigInteger('distritoOrigen_id');
            $table->foreign('distritoOrigen_id')->references('id')->on('distritos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ruta_origenes');
    }
}
