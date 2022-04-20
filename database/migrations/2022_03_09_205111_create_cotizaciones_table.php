<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCotizacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizaciones', function (Blueprint $table) {
            $table->id();
            $table->text('descripcion');
            $table->text('status');
            $table->text('respuesta');
            $table->string('seriado');
            $table->float('iva');
            $table->float('MSRP');
            $table->float('comision_promotor');
            $table->float('utilidad_distribuidor');
            $table->float('SPIF');
            $table->float('plusvalizacion');
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
        Schema::dropIfExists('cotizaciones');
    }
}
