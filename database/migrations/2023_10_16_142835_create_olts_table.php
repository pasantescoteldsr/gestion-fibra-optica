<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOltsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('olts', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->integer('nro_puertos')->nullable();
            $table->boolean('estado')->nullable();
            $table->date('fecha_instalacion')->nullable();
            $table->string('modelo')->nullable();
            $table->string('responsable')->nullable();
            $table->point('coordenada')->nullable();
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
        Schema::dropIfExists('olts');
    }
}
