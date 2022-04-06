<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospedaInternacionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospeda_internacional', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->string('celular',10);
            $table->string('correo',50);
            $table->string('ciudad_reside',10);
            $table->string('direccion',50);
            $table->string('cantidad_voluntarios', 10);
            $table->date('hospedar_fecha');
            $table->time('hospedar_hora');
            $table->string('formar_parte');
            $table->string('saber_programa',30);
            $table->string('decir_algo')->nullable();
            $table->string('estado')->nullable();
            
            $table->unsignedBigInteger('idofrecimiento');
            $table->foreign('idofrecimiento')->on ('ofrecimiento_hospeda')->references('id'); //foranea celular
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospeda_internacional');
    }
}
