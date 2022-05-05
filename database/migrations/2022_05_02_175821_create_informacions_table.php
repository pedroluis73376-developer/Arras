<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informacions', function (Blueprint $table) {
            $table->id();
            $table->text('imgH1');
            $table->text('imgH2');
            $table->text('imgH3');
            $table->text('esloganH1');
            $table->text('esloganH2');
            $table->text('esloganH3');
            $table->text('imgMV1');
            $table->text('imgMV2');
            $table->text('imgMV3');
            $table->text('descripcion1');
            $table->foreignId('arra_id1')->references('id')->on('arras');
            $table->text('imgMV4');
            $table->text('imgMV5');
            $table->text('imgMV6');
            $table->text('descripcion2');
            $table->foreignId('arra_id2')->references('id')->on('arras');
            $table->text('imgMV7');
            $table->text('imgMV8');
            $table->text('imgMV9');
            $table->text('descripcion3');
            $table->foreignId('arra_id3')->references('id')->on('arras');
            $table->text('titulo');
            $table->text('descripcion4');
            $table->text('imgF1');
            $table->text('imgF2');
            $table->text('imgF3');
            $table->text('titulo2');
            $table->text('descripcion5');
            $table->text('imgF4');
            $table->text('imgF5');
            $table->text('imgF6');

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
        Schema::dropIfExists('informacions');
    }
}
