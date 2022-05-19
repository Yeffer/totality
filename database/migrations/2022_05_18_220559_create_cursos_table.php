<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->bigIncrements('id');            
            $table->string('nombre');
            $table->timestamp('fch_inicio')->nullable();
            $table->timestamp('fch_fin')->nullable(); 
            $table->unsignedBigInteger('salon_id');
            $table->unsignedBigInteger('profesor_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();  

            $table->foreign('salon_id')
                ->references('id')
                ->on('salones');

            $table->foreign('profesor_id')
                ->references('id')
                ->on('profesores');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
