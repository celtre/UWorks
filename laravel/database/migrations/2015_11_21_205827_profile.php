<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Profile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('profiles', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nombre');
          $table->string('apellido');
          $table->string('email')->unique();
          $table->time('fecha_nacimiento');
          $table->string('descripcion');
          $table->string('pais');
          $table->string('celular');
          $table->string('ocupacion');
          $table->string('foto');
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
        Schema::drop('profiles');
    }
}
