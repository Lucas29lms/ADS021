<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitantes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('condominio_id')->unsigned();
            $table->foreign('condominio_id')->references('id')->on('condominios');
            $table->integer('unidade_id')->unsigned();
            $table->foreign('unidade_id')->references('id')->on('unidades');
            $table->string('nome',100);
            $table->string('rg',10);
            $table->date('data_entrada',8);
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
        Schema::dropIfExists('visitantes');
    }
}
