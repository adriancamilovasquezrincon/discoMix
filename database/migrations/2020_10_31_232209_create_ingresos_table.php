<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingresos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('ingresados');
            $table->unsignedBigInteger('recepcionista_id');
            $table->foreign('recepcionista_id')->references('id_recepcionista')->on('recepcionistas');
            $table->unsignedBigInteger('invitado_id');
            $table->foreign('invitado_id')->references('id_invitado')->on('invitados');
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
        Schema::dropIfExists('ingresos');
    }
}
