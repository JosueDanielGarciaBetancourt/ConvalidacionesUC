<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('CursosConvalidados', function (Blueprint $table) {
            $table->string("idCursoPostulante", 9);
            $table->string("anioMallaCursoPostulante", 10);
            $table->string("nombreCursoPostulante", 45);
            $table->string("idCursoLocal", 9);
            $table->string("anioMallaCursoLocal", 10);
            $table->string("nombreCursoLocal");
            $table->double("porcentajeSimilitud");
            $table->string("anioMallaSolicitada");
            
            $table->primary(['idCursoPostulante', 'anioMallaCursoPostulante']); 

             // Crear una clave foránea compuesta
            $table->foreign(['idCursoLocal', 'anioMallaCursoLocal'])
                    ->references(['idCurso', 'anioMalla_Curso'])->on('Cursos')
                    ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('CursosConvalidados');
    }
};
