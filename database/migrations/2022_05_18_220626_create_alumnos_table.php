<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('primer_nombre');
            $table->string('segundo_nombre');
            $table->string('primer_apellido');
            $table->string('segundo_apellido');
            $table->string('identificacion');
            $table->enum('genero', ['Masculino', 'Femenino'])->default('Masculino');            
            $table->timestamp('fch_nacimiento')->nullable();
            $table->integer('edad');
            $table->unsignedBigInteger('salon_id');
            $table->unsignedBigInteger('profesor_id');
            $table->unsignedBigInteger('etario_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();  

            $table->foreign('salon_id')
                ->references('id')
                ->on('salones');

            $table->foreign('profesor_id')
                ->references('id')
                ->on('profesores');

            $table->foreign('etario_id')
                ->references('id')
                ->on('etario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
