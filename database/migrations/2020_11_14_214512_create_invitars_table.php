<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvitarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Tipo_documento',3);
            $table->string('nro_doc',15);
            $table->string('nombres',45);
            $table->string('apellidos',45);
            $table->integer('edad');
            $table->string('sexo',45);
            $table->string('telefono',45);
            $table->string('direccion',45);
            $table->string('email',45);
            $table->string('tipo_persona',60);
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
        Schema::dropIfExists('invitars');
    }
}
