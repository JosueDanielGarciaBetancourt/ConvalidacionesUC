
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Postulantes_Cursos', function (Blueprint $table) {
            $table->id('idPostulanteCurso')->primary();
            $table->string('idPostulante', 8); //77043114
            $table->string('idCurso', 9); //ASUC00316
           
            $table->foreign('idPostulante')
                    ->references('idPostulante')->on('Postulantes')
                    ->onDelete('cascade');
            $table->foreign('idCurso')
                    ->references('idCurso')->on('Cursos')
                    ->onDelete('cascade');

            $table->timestamps(); //created_at updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Postulantes_Cursos');
    }
};
