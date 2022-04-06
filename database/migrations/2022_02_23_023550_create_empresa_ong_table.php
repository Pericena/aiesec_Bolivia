<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaOngTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa_ong', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_empresa',50);
            $table->string('nombre_representante',50);
            $table->string('cargo_representante',50);
            $table->string('pagina_web',100)->nullable();
            $table->string('celular',10);
            $table->string('telefono',10);
            $table->string('correo_representante',50);
            $table->string('correo_empresa',50);
            $table->string('departamento',40);
            $table->string('direccion',50);
            $table->text('dedicacion');
            $table->string('saber_de_AIESEC',25);
            $table->string('nombre_amigo',50)->nullable();

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
        Schema::dropIfExists('empresa_ong');
    }
}
