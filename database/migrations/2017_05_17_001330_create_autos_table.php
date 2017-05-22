<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('chasis_id')->unsigned();
            $table->foreign('chasis_id')->references('id')->on('chases');
            $table->integer('tazas_id')->unsigned();
            $table->foreign('tazas_id')->references('id')->on('tazas');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('color');
            $table->string('token');
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
        Schema::dropIfExists('autos');
    }
}
