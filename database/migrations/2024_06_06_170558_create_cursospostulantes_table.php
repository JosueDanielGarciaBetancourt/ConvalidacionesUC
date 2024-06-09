<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('CursosPostulantes', function (Blueprint $table) {
            $table->string('idCursoPostulante', 15)->primary(); //curso123
            $table->string('nombreCursoPostulante', 100);
            $table->unsignedInteger('periodoCursoPostulante');
            $table->boolean('estadoCursoPostulante'); // 1 o 0,  Apto o No apto (no volver a 
                                                      //procesar con Deep Larning)
            $table->timestamps(); //created_at updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('CursosPostulantes');
    }
};
