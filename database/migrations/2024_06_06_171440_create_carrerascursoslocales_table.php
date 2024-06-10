<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Carreras_CursosLocales', function (Blueprint $table) {
            $table->string('idCursoLocal', 9); 
            $table->string('idCarreraLocal', 3);
            $table->string('idMalla', 10);

            // Estableciendo la clave primaria compuesta
            $table->primary(['idCursoLocal', 'idCarreraLocal', 'idMalla']);

            $table->foreign('idCursoLocal')
                    ->references('idCursoLocal')->on('CursosLocales')
                    ->onDelete('cascade');
            $table->foreign('idCarreraLocal')
                    ->references('idCarreraLocal')->on('CarrerasLocales')
                    ->onDelete('cascade');
            $table->foreign('idMalla')
                    ->references('idMalla')->on('Mallas')
                    ->onDelete('cascade');
           
            $table->timestamps(); //created_at updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Carreras_Cursos');
    }
};
