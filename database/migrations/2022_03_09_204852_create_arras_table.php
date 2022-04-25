<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arras', function (Blueprint $table) {
            $table->id();
            $table->string('clave');
            $table->string('nombre');
            $table->string('imgFrente');
            $table->string('imgFrente2');
            $table->string('imgVuelta');
            $table->string('imgVuelta2');
            $table->string('imgOpcional');
            $table->float('peso');
            $table->float('precio');
            $table->float('grosor');
            $table->foreignId('metales_id')->references('id')->on('metals');
            $table->foreignId('frentes_id')->references('id')->on('frentes');
            $table->foreignId('size_id')->references('id')->on('sizes');
            $table->foreignId('vueltas_id')->references('id')->on('vueltas');
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
        Schema::dropIfExists('arras');
    }
}
