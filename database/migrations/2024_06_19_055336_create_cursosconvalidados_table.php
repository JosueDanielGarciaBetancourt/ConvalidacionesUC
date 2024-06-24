<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('CursosConvalidados', function (Blueprint $table) {
            $table->string('idCursoPostulante', 9)->primary(); //wxdw125
            $table->string('nombreCursoPostulante', 100); // Introducción a la programación
            $table->string('idCursoLocal', 9); //ASUC00687 

            $table->foreign('idCursoLocal')
                    ->references('idCurso')->on('Cursos')
                    ->onDelete('cascade');

            $table->string('nombreCursoLocal', 100); //Programación I
            $table->double('porcentajeSimilitud', 15)->nullable(); // Obligatorio o Electivo  
            $table->unsignedInteger('anioMallaSolicitada');
            $table->timestamps(); //created_at updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('CursosConvalidados');
    }
};
