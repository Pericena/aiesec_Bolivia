<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfrecimientoHospedaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofrecimiento_hospeda', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('habitacion_unica')->default(0);
            $table->tinyInteger('habitacion_compa')->default(0);
            $table->tinyInteger('servicios')->default(0);
            $table->tinyInteger('desayuno')->default(0);
            $table->tinyInteger('almuerzo')->default(0);
            $table->tinyInteger('cena')->default(0);
            $table->tinyInteger('otros')->default(0);
            

            /*
            $table->string('ofrecer');
            $table->tinyInteger('condicion')->default(0);*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ofrecimiento_hospeda');
    }
}
