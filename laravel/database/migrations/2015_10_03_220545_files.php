<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Files extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('files', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nombre');
          $table->string('descripcion');
          $table->string('tipo');
          $table->string('materia');
          $table->string('nombre_original');
          $table->string('hash');
          $table->string('path');
          $table->string('email');
          $table->string('name');
          //$table->integer('descargas');
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
        Schema::drop('files');
    }
}
