<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('CarrerasLocales_Cursos', function (Blueprint $table) {
            $table->id("idCarreraLocal_Curso")->primary();
            $table->string('idCarreraLocal', 3); //103
            $table->string('idCurso', 9); //ASUC00316

            $table->foreign('idCarreraLocal')
                    ->references('idCarreraLocal')->on('CarrerasLocales')
                    ->onDelete('cascade');
            $table->foreign('idCurso')
                    ->references('idCurso')->on('Cursos')
                    ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('CarrerasLocales_Cursos');
    }
};
