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
            $table->string('idCarrera', 3);

            // Estableciendo la clave primaria compuesta
            $table->primary(['idCursoLocal', 'idCarrera']);

            $table->foreign('idCursoLocal')
                    ->references('idCursoLocal')->on('CursosLocales')
                    ->onDelete('cascade');
            $table->foreign('idCarrera')
                    ->references('idCarrera')->on('CarrerasLocales')
                    ->onDelete('cascade');
           
            $table->timestamps(); //created_at updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Carreras_Cursos');
    }
};
