<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTalentoGlobalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talento_global', function (Blueprint $table) {
            
            $table->id();
            $table->string('nombres',50);
            $table->string('apellidos',50);
            $table->string('edad',20);
            $table->string('correo',50);
            $table->string('celular',10);
            $table->string('ciudad_reside',15);
            $table->string('universidad');
            $table->string('grado_estudio',40);
            $table->string('carrera',50);
            $table->string('otra_carrera',50)->nullable();
            $table->string('nivel_ingles',40);
            $table->string('experiencia',50);
            $table->string('area_desarrollo',40);
            $table->string('pasantia_internacional',45);
            $table->string('programa',40);
            $table->string('descubrimiento_programa',35);
            $table->string('medio_contacto',40);
            $table->string('describir_documento');
            $table->string('documentos');

            $table->string('estado')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('talento_global');
    }
}
