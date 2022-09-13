<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCotizarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizar', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('proforma');
            $table->string('condicion_pago');
            $table->string('decripcion');
            $table->double('precio_gasolina');
            $table->string('tipo_igv');

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
        Schema::dropIfExists('cotizar');
    }
}
