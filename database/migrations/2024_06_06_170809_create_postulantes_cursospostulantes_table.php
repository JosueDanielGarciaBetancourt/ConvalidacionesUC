<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Postulantes_CursosPostulantes', function (Blueprint $table) {
            $table->string('idPostulante', 8); //77043114
            $table->string('idCursoPostulante', 15); //curso123
           
            // Estableciendo la clave primaria compuesta
            $table->primary(['idPostulante', 'idCursoPostulante']);

            $table->foreign('idPostulante')
                    ->references('idPostulante')->on('Postulantes')
                    ->onDelete('cascade');
            $table->foreign('idCursoPostulante')
                    ->references('idCursoPostulante')->on('CursosPostulantes')
                    ->onDelete('cascade');

            $table->timestamps(); //created_at updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Postulantes_CursosPostulantes');
    }
};
