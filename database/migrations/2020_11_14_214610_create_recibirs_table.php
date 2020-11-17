<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecibirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recibirs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('ingresados');
            $table->string('fecha',45);
            $table->unsignedBigInteger('rec_id');
            $table->foreign('rec_id')->references('id')->on('invitars');
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
        Schema::dropIfExists('recibirs');
    }
}
