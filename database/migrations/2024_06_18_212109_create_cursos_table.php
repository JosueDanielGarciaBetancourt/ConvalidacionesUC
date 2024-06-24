<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Cursos', function (Blueprint $table) {
            $table->string('idCurso', 9); //ASUC00316 ó E10300015 (malla 2024)
            $table->string('anioMalla_Curso', 10); // 2024

            $table->primary(['idCurso', 'anioMalla_Curso']); //Esto sirve debido a que en dos mallas
            //distintas se repite el idCurso, por ende la solución para llave primaria es compuesta
            //Ejemplo: ASUC00316-2015, aquí podría tener un estadoCurso de 1 ya que en esta malla ya se convalidó
            //ASUC00316-2018, aquí podría tener un estadoCurso de 0 ya que en esta malla aún no se convalidó

            $table->string('tipoCurso', 10); // Local o Postulante  
            $table->unsignedInteger('periodoCurso')->nullable(); // 4
            $table->string('nombreCurso'); //Fundamentos de programación
            $table->unsignedInteger('horasTeoricasCurso')->default(0); // 2
            $table->unsignedInteger('horasPracticasCurso')->default(0); // 2
            $table->unsignedInteger('creditosCurso')->default(0);// 3
            $table->string('caracterCurso', 15)->nullable(); // Obligatorio o Electivo  
            $table->text('sumillaSilabo_Curso');
            $table->boolean('estadoCurso')->nullable(); // 1 o 0,  Apto o No apto 
            //Esto significa que ya no se volverá a procesar con Deep Learning si es 0
            //Para hallar el valor de estadoCurso se necesita comprobar que el curso postulante
            //no tenga cursos convalidados en la tabla CursosConvalidados
            // $table->string('cursoEmparejado')->nullable(); 
            $table->text('rutaSilaboPDF_Curso')->nullable(); //Al crear un curso puede ser nula la ruta de silabo
            $table->timestamps(); //created_at updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Cursos');
    }
};