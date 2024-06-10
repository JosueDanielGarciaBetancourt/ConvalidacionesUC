<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('CursosLocales', function (Blueprint $table) {
            $table->string('idCursoLocal', 9); //ASUC00316 ó E10300015 (malla 2024)
            $table->string('idMalla', 10);
            
            // Estableciendo la clave primaria compuesta
            $table->primary(['idCursoLocal', 'idMalla']);

            $table->foreign('idMalla')->references('idMalla')->on('Mallas')->onDelete('cascade');

            $table->unsignedInteger('periodoCursoLocal'); // 4
            $table->string('nombreCursoLocal', 100); //Estructura de datos
            $table->unsignedInteger('horasTeoricasCursoLocal')->default(0); // 2
            $table->unsignedInteger('horasPracticasCursoLocal')->default(0); // 2
            $table->unsignedInteger('creditosCursoLocal')->default(0);// 3
            $table->string('tipoCursoLocal', 15)->default("-"); // Obligatorio o Electivo  
            $table->text('sumillaSilabo_CursoLocalMalla')->default("-");
            $table->text('rutaSilaboPDF_CursoLocalMalla')->default("-");

            $table->timestamps(); //created_at updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('CursosLocales');
    }
};
