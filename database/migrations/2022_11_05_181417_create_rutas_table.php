<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRutasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rutas', function (Blueprint $table) {
            $table->id();
            $table->string('departamento_origen');
            $table->string('provincia_origen');
            $table->string('distrito_origen');
            $table->string('departamento_destino');
            $table->string('provincia_destino');
            $table->string('distrito_destino');
            $table->timestamps();
            $table->unsignedBigInteger('cargas_id');

            $table->foreign('cargas_id')->references('id')->on('cargas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rutas');
    }
}
