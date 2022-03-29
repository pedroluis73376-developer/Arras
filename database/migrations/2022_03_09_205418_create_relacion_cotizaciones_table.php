<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelacionCotizacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relacion_cotizaciones', function (Blueprint $table) {
            $table->foreignId('id_cotizacion')->references('id')->on('cotizaciones');
            $table->foreignId('id_arra')->references('id')->on('arras');
            $table->foreignId('id_usuario')->references('id')->on('users')->nullable;
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
        Schema::dropIfExists('relacion_cotizaciones');
    }
}
