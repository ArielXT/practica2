<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreAteTableCbzapatosMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zapatos', function (Blueprint $table) {
            $table->increments('idzapato');
            $table->String('calzado');
            $table->String('tipo');
            $table->String('color');
            $table->String('talla');
            $table->String('marca');
            $table->String('genero');
            $table->String('edades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zapatos');
    }
}
