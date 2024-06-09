<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('CursosLocales', function (Blueprint $table) {
            $table->string('idCursoLocal', 9)->primary(); //ASUC00316 ó E10300015 (malla 2024)
            
            $table->string('idMalla', 10)->unique();
            $table->foreign('idMalla')->references('idMalla')->on('Mallas')->onDelete('cascade');

            $table->unsignedInteger('periodoCursoLocal'); // 4
            $table->string('nombreCursoLocal', 60); //Estructura de datos
            $table->unsignedInteger('horasTeoricasCursoLocal'); // 2
            $table->unsignedInteger('horasPracticasCursoLocal'); // 2
            $table->unsignedInteger('creditosCursoLocal');// 3
            $table->string('tipoCursoLocal', 15); // Obligatorio o Electivo  
            $table->timestamps(); //created_at updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('CursosLocales');
    }
};
