<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('fondo');
            $table->string('chasis');
            $table->integer('rueda1x');
            $table->integer('rueda1y');
            $table->integer('rueda2x');
            $table->integer('rueda2y');
            $table->integer('ruedasize');
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
        Schema::dropIfExists('chases');
    }
}
