<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CursoLocal;

class CursoLocal_Seeder extends Seeder
{
    public function run(): void
    {
        $cursos2015 = $this->getCursos2015();
        $cursos2018 = $this->getCursos2018();
        $cursos2024 = $this->getCursos2024();

        foreach ($cursos2015 as $curso) {
            CursoLocal::create($curso);
        }

        foreach ($cursos2018 as $curso) {
            CursoLocal::create($curso);
        }

        foreach ($cursos2024 as $curso) {
            CursoLocal::create($curso);
        }
    }

    private function getCursos2015(): array
    {
        return [
            //Periodo 1
            $this->crearCurso('ASUC00112', 'Malla1', 1, 'Comunicación', 2, 2, 3, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00315', 'Malla1', 1, 'Estrategias y Técnicas de Estudio', 2, 2, 3, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00512', 'Malla1', 1, 'Introducción a la Ingeniería', 2, 2, 3, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00562', 'Malla1', 1, 'Matemática Discreta', 2, 4, 4, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00672', 'Malla1', 1, 'Pre Cálculo I', 4, 2, 5, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00736', 'Malla1', 1, 'Pre Cálculo I', 4, 2, 5, 'Obligatorio', '-', '-'),
            
            //Periodo 2
            $this->crearCurso('ASUC00065', 'Malla1', 2, 'Cálculo I', 4, 2, 5, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC01042', 'Malla1', 2, 'Derecho Informático para Ingeniería', 2, 2, 3, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00673', 'Malla1', 2, 'Pre cálculo II', 4, 2, 5, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00687', 'Malla1', 2, 'Programación I', 2, 4, 4, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00798', 'Malla1', 2, 'Sistemas de Información', 2, 4, 4, 'Obligatorio', '-', '-'),
            
            //Periodo 3
            $this->crearCurso('ASUC00005', 'Malla1', 3, 'Administración', 2, 2, 3, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00056', 'Malla1', 3, 'Biología', 2, 2, 3, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00066', 'Malla1', 3, 'Cálculo II', 4, 2, 5, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00251', 'Malla1', 3, 'Ecología', 2, 2, 3, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00347', 'Malla1', 3, 'Física I', 2, 4, 4, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00688', 'Malla1', 3, 'Programación II', 2, 4, 4, 'Obligatorio', '-', '-'),
            
            //Periodo 4
            $this->crearCurso('ASUC00939', 'Malla1', 4, 'Análisis y Requerimientos de Software', 4, 2, 5, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00256', 'Malla1', 4, 'Economía I', 2, 2, 3, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00316', 'Malla1', 4, 'Estructura de Datos', 2, 2, 3, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00348', 'Malla1', 4, 'Física II', 2, 4, 4, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00677', 'Malla1', 4, 'Probabilidad y Estadística', 2, 4, 4, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00707', 'Malla1', 4, 'Psicología', 2, 2, 3, 'Obligatorio', '-', '-'),
             
            //Periodo 5
            $this->crearCurso('ASUC00051', 'Malla1', 5, 'Base de Datos', 2, 4, 4, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00130', 'Malla1', 5, 'Contabilidad', 2, 2, 3, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00954', 'Malla1', 5, 'Discapacidad e Integración', 2, 0, 2, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00957', 'Malla1', 5, 'Diseño de Software', 2, 4, 4, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00305', 'Malla1', 5, 'Estadística Aplicada', 2, 4, 4, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00340', 'Malla1', 5, 'Filosofía y Ética', 2, 0, 2, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00637', 'Malla1', 5, 'Organización y Arquitectura del Computador', 2, 2, 3, 'Obligatorio', '-', '-'),

            //Periodo 6 
            $this->crearCurso('ASUC00006', 'Malla1', 6, 'Administración de Base de Datos', 2, 2, 3, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00947', 'Malla1', 6, 'Construcción de Software', 4, 2, 5, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00470', 'Malla1', 6, 'Inglés Profesional I', 2, 2, 3, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00584', 'Malla1', 6, 'Metodología de Investigación', 2, 2, 3, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC01006', 'Malla1', 6, 'Pruebas y Calidad de Software', 2, 4, 4, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00754', 'Malla1', 6, 'Redes de Computadores', 2, 4, 4, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC01061', 'Malla1', 6, 'Sistemas Operativos', 2, 2, 3, 'Obligatorio', '-', '-'),

            //Periodo 7
            $this->crearCurso('ASUC00123', 'Malla1', 7, 'Conmutación y Enrutamiento', 2, 4, 4, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00360', 'Malla1', 7, 'Formulación y Evaluación de Proyectos de Inversión', 2, 2, 3, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00471', 'Malla1', 7, 'Inglés Profesional II', 2, 2, 3, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00528', 'Malla1', 7, 'Investigación de Operaciones', 2, 4, 4, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC01003', 'Malla1', 7, 'Procesos de Software', 4, 2, 5, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00802', 'Malla1', 7, 'Sistemas de Información Integrados', 2, 2, 3, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00304', 'Malla1', 7, 'Escalamiento de Redes de Computadoras', 2, 2, 3, 'Electivo', '-', '-'),
            $this->crearCurso('ASUC00472', 'Malla1', 7, 'Iniciativa Empresarial', 2, 2, 3, 'Electivo', '-', '-'),
            $this->crearCurso('ASUC00587', 'Malla1', 7, 'Metodologías Ágiles de Desarrollo de Software', 2, 2, 3, 'Electivo', '-', '-'),

            //Periodo 8
            $this->crearCurso('ASUC00225', 'Malla1', 8, 'Dirección de Proyectos', 2, 2, 3, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00281', 'Malla1', 8, 'Emprendimiento e Innovación', 2, 2, 3, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00364', 'Malla1', 8, 'Fundamentos de Arquitectura Empresarial', 2, 4, 4, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00490', 'Malla1', 8, 'Inteligencia de Negocios', 2, 2, 3, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00750', 'Malla1', 8, 'Redacción Científica y Académica', 2, 2, 3, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00845', 'Malla1', 8, 'Taller de Liderazgo', 2, 2, 3, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00940', 'Malla1', 8, 'Arquitectura orientada a servicios', 2, 2, 3, 'Electivo', '-', '-'),
            $this->crearCurso('ASUC00756', 'Malla1', 8, 'Redes WAN', 2, 2, 3, 'Electivo', '-', '-'),
            $this->crearCurso('ASUC00846', 'Malla1', 8, 'Taller de Liderazgo Emprendedor', 2, 2, 3, 'Electivo', '-', '-'),
            
            //Periodo 9
            $this->crearCurso('ASUC00097', 'Malla1', 9, 'Cloud Computing', 2, 2, 3, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00413', 'Malla1', 9, 'Gestión de Servicios TI', 2, 2, 3, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00469', 'Malla1', 9, 'Ingeniería Web', 2, 4, 4, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC01018', 'Malla1', 9, 'Taller de Investigación I', 2, 4, 4, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00854', 'Malla1', 9, 'Taller de proyectos de Ingeniería I', 4, 2, 5, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00209', 'Malla1', 9, 'Desarrollo de Soluciones Móviles', 2, 2, 3, 'Electivo', '-', '-'),
            $this->crearCurso('ASUC00452', 'Malla1', 9, 'Incubación Empresarial I', 2, 2, 3, 'Electivo', '-', '-'),
            $this->crearCurso('ASUC00769', 'Malla1', 9, 'Seguridad de la información corporativa', 2, 2, 3, 'Electivo', '-', '-'),

            //Periodo 10
            $this->crearCurso('ASUC00941', 'Malla1', 10, 'Auditoría de Sistemas', 2, 4, 4, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00614', 'Malla1', 10, 'Negocios Electrónicos', 2, 2, 3, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00662', 'Malla1', 10, 'Planeamiento Estratégico de los SI/TI', 2, 2, 3, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC01020', 'Malla1', 10, 'Taller de Investigación II', 2, 4, 4, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00855', 'Malla1', 10, 'Taller de proyectos de Ingeniería II', 4, 2, 5, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00210', 'Malla1', 10, 'Desarrollo de Videojuegos', 2, 2, 3, 'Electivo', '-', '-'),
            $this->crearCurso('ASUC00381', 'Malla1', 10, 'Gerencia de la Seguridad de Información', 2, 2, 3, 'Electivo', '-', '-'),
            $this->crearCurso('ASUC00453', 'Malla1', 10, 'Incubación Empresarial II', 2, 2, 3, 'Electivo', '-', '-'),
        ];
    }

    private function getCursos2018(): array
    {
        return [
            //Periodo 1
            $this->crearCurso('ASUC00512', 'Malla2', 1, 'Introducción a la Ingeniería de Sistemas e Informática', 2, 2, 3, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC01082', 'Malla2', 1, 'Gestión del Aprendizaje', 2, 2, 3, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC01117', 'Malla2', 1, 'Química 1', 2, 2, 3, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC01086', 'Malla2', 1, 'Laboratorio de Liderazgo', 2, 0, 2, 'Obligatorio', '-', '-'),
            

            //Periodo 2
            $this->crearCurso('ASUC01075', 'Malla2', 2, 'Comunicación Efectiva', 2, 2, 3, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00562', 'Malla2', 2, 'Matemática Discreta', 2, 4, 4, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC01110', 'Malla2', 2, 'Fundamentos del Cálculo', 2, 4, 4, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC01108', 'Malla2', 2, 'Álgebra Matricial y Geometría Analítica', 2, 4, 4, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC01112', 'Malla2', 2, 'Gestión Basada en Procesos', 2, 2, 3, 'Obligatorio', '-', '-'),

            //Periodo 3
            $this->crearCurso('ASUC01160', 'Malla2', 3, 'Cálculo Diferencial', 4, 2, 5, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC01312', 'Malla2', 3, 'Fundamentos de Programación', 2, 4, 4, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00066', 'Malla2', 3, 'Sistemas de Información', 2, 4, 4, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC01296', 'Malla2', 3, 'Física 1', 2, 4, 4, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC01275', 'Malla2', 3, 'Estadística General', 2, 2, 3, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC01389', 'Malla2', 3, 'Laboratorio de Innovación', 0, 2, 1, 'Obligatorio', '-', '-'),

            //Periodo 4
            $this->crearCurso('ASUC01161', 'Malla2', 4, 'Cálculo Integral', 4, 2, 5, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC01482', 'Malla2', 4, 'Programación Orientada a Objetos', 2, 4, 4, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00316', 'Malla2', 4, 'Estructura de Datos', 2, 2, 3, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC01297', 'Malla2', 4, 'Física 2', 2, 4, 4, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC01273', 'Malla2', 4, 'Estadística Aplicada', 2, 2, 3, 'Obligatorio', '-', '-'),
            
            //Periodo 5
            $this->crearCurso('ASUC01136', 'Malla2', 5, 'Análisis y Requerimientos de Software', 2, 4, 4, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00051', 'Malla2', 5, 'Base de Datos', 2, 4, 4, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC01635', 'Malla2', 5, 'Discapacidad e Inclusión', 2, 2, 3, 'Electivo', '-', '-'),
            $this->crearCurso('ASUC01658', 'Malla2', 5, 'Medio Ambiente y Ecología', 2, 2, 3, 'Electivo', '-', '-'),

            //Periodo 6 
            $this->crearCurso('ASUC00957', 'Malla2', 6, 'Diseño de Software', 2, 4, 4, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC01140', 'Malla2', 6, 'Arquitectura del computador', 2, 4, 4, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00006', 'Malla2', 6, 'Administración de Base de Datos', 2, 2, 3, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC01532', 'Malla2', 6, 'Seminario de Investigación', 2, 2, 3, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC01061', 'Malla2', 6, 'Sistemas Operativos', 2, 2, 3, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC01386', 'Malla2', 6, 'Investigación Operativa', 2, 4, 4, 'Obligatorio', '-', '-'),

            //Periodo 7
            $this->crearCurso('ASUC00947', 'Malla2', 7, 'Construcción de Software', 4, 2, 5, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00754', 'Malla2', 7, 'Redes de Computadores', 2, 4, 4, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC01141', 'Malla2', 7, 'Arquitectura Empresarial', 4, 2, 5, 'Obligatorio', '-', '-'),

            //Periodo 8
            $this->crearCurso('ASUC01203', 'Malla2', 8, 'Conversation Class', 2, 2, 3, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC01006', 'Malla2', 8, 'Pruebas y Calidad de Software', 2, 4, 4, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00123', 'Malla2', 8, 'Conmutación y Enrutamiento', 2, 4, 4, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC01235', 'Malla2', 8, 'Dirección de Proyectos', 2, 4, 4, 'Obligatorio', '-', '-'),

            //Periodo 9
            $this->crearCurso('ASUC00413', 'Malla2', 9, 'Gestión de Servicios TI', 2, 2, 3, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00469', 'Malla2', 9, 'Ingeniería Web', 2, 4, 4, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC01584', 'Malla2', 9, 'Taller de Proyectos 1 - Ingeniería de Sistemas e Informática', 2, 4, 4, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC01228', 'Malla2', 9, 'Desarrollo de Aplicaciones Móviles', 2, 4, 4, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC01702', 'Malla2', 9, 'Procesos de Software', 2, 2, 3, 'Electivo', '-', '-'),
            $this->crearCurso('ASUC00304', 'Malla2', 9, 'Escalamiento de Redes de Computadoras', 2, 2, 3, 'Electivo', '-', '-'),
            $this->crearCurso('ASUC00802', 'Malla2', 9, 'Sistemas de Información Integrados', 2, 2, 3, 'Electivo', '-', '-'),
            $this->crearCurso('ASUC00587', 'Malla2', 9, 'Metodologías Ágiles de Desarrollo de Software', 2, 2, 3, 'Electivo', '-', '-'),
            $this->crearCurso('ASUC00756', 'Malla2', 9, 'Redes WAN', 2, 2, 3, 'Electivo', '-', '-'),
            $this->crearCurso('ASUC00769', 'Malla2', 9, 'Seguridad de la información corporativa', 2, 2, 3, 'Electivo', '-', '-'),
            $this->crearCurso('ASUC00614', 'Malla2', 9, 'Negocios Electrónicos', 2, 2, 3, 'Electivo', '-', '-'),
            $this->crearCurso('ASUC00662', 'Malla2', 9, 'Planeamiento Estratégico de los SI/TI', 2, 2, 3, 'Electivo'),
            $this->crearCurso('ASUC00210', 'Malla2', 9, 'Desarrollo de Videojuegos', 2, 2, 3, 'Electivo', '-', '-'),
            $this->crearCurso('ASUC00381', 'Malla2', 9, 'Gerencia de la Seguridad de Información', 2, 2, 3, 'Electivo', '-', '-'),

            //Periodo 10
            $this->crearCurso('ASUC00490', 'Malla2', 10, 'Inteligencia de Negocios', 2, 2, 3, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00097', 'Malla2', 10, 'Cloud Computing', 2, 2, 3, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC00941', 'Malla2', 10, 'Auditoría de Sistemas', 2, 4, 4, 'Obligatorio', '-', '-'),
            $this->crearCurso('ASUC01585', 'Malla2', 10, 'Taller de Proyectos 2 - Ingeniería de Sistemas e Informática', 2, 4, 4, 'Obligatorio', '-', '-'),
        ];
    }
    
    private function getCursos2024(): array
    {
        return [
            //Periodo 1
            $this->crearCurso('E10300011', 'Malla3', 1, 'Introducción a la Ingeniería de Sistemas e Informática'),
            $this->crearCurso('F00050137', 'Malla3', 1, 'Matemática Discreta'),
           
            //Periodo 2
            $this->crearCurso('F00050092', 'Malla3', 2, 'Fundamentos del Cálculo'),
            $this->crearCurso('F00050003', 'Malla3', 2, 'Álgebra Lineal y Geometría Analítica'),
            $this->crearCurso('E10300013', 'Malla3', 2, 'Programación Orientada a Objetos'),
            $this->crearCurso('F00050083', 'Malla3', 2, 'Base de Datos 1'),
            $this->crearCurso('G00000026', 'Malla3', 2, 'Discapacidad e Inclusión Social'),

            //Periodo 3
            $this->crearCurso('F00050091', 'Malla3', 3, 'Cálculo Diferencial'),
            $this->crearCurso('F00050096', 'Malla3', 3, 'Física 1'),
            $this->crearCurso('E10300015', 'Malla3', 3, 'Estructura de Datos'),
            $this->crearCurso('G00000007', 'Malla3', 3, 'Estadística y Probabilidades'),
            $this->crearCurso('E10300014', 'Malla3', 3, 'Diseño Web'),

            //Periodo 4
            $this->crearCurso('F00050100', 'Malla3', 4, 'Cálculo Integral'),
            $this->crearCurso('G00000014', 'Malla3', 4, 'Medio Ambiente y Desarrollo Sostenible'),
            $this->crearCurso('E10300016', 'Malla3', 4, 'Analisis y Diseño de Software'),

            //Periodo 5
            $this->crearCurso('F00050107', 'Malla3', 5, 'Estadística para Ingeniería'),
            $this->crearCurso('E10300020', 'Malla3', 5, 'Arquitectura del Computador'),
            $this->crearCurso('E10300019', 'Malla3', 5, 'Base de Datos 2'),
            $this->crearCurso('G00000019', 'Malla3', 5, 'Laboratorio de Liderazgo e Innovación Avanzado'),
            
            //Periodo 6
            $this->crearCurso('E10300022', 'Malla3', 6, 'Sistemas Operativos'),
            $this->crearCurso('F00050112', 'Malla3', 6, 'Investigación Operativa 1'),
            $this->crearCurso('E10300021', 'Malla3', 6, 'Desarrollo de Videojuegos'),

            //Periodo 7
            $this->crearCurso('E10300026', 'Malla3', 7, 'Construcción y Pruebas de Software'),
            $this->crearCurso('F00050134', 'Malla3', 7, 'Redes de Computadoras'),

            //Periodo 8
            $this->crearCurso('F00050135', 'Malla3', 8, 'Conmutación y Enrutamiento'),
            $this->crearCurso('E10300028', 'Malla3', 8, 'Metodologías Ágiles para el Desarrollo de Software'),
            $this->crearCurso('F00050136', 'Malla3', 8, 'Desarrollo de Aplicaciones Móviles'),

            //Periodo 9
            $this->crearCurso('E10300033', 'Malla3', 9, 'Aplicaciones Cloud'),
            $this->crearCurso('E10300030', 'Malla3', 9, 'Taller de Proyectos 1 en Ingeniería de Sistemas e Informática'),
            $this->crearCurso('E10300032', 'Malla3', 9, 'Seguridad de la Información'),

            //Periodo 10
            $this->crearCurso('E10300042', 'Malla3', 10, 'Planificación y Gestión de Tecnologías de la Información'),
            $this->crearCurso('E10300039', 'Malla3', 10, 'Taller de Proyectos 2 en Ingeniería de Sistemas e Informática'),

        ];
    }

    private function crearCurso($id, $malla, $periodo, $nombre, $horasTeoricas = 0, 
                                $horasPracticas = 0, $creditos = 0, 
                                $tipo = '-', $sumillaSilabo = '-',
                                $rutaSilaboPDF = '-'): array
    {
        return [
            'idCursoLocal' => $id,
            'idMalla' => $malla,
            'periodoCursoLocal' => $periodo,
            'nombreCursoLocal' => $nombre,
            'horasTeoricasCursoLocal' => $horasTeoricas,
            'horasPracticasCursoLocal' => $horasPracticas,
            'creditosCursoLocal' => $creditos,
            'tipoCursoLocal' => $tipo,
            'sumillaSilabo_CursoLocalMalla' => $sumillaSilabo,
            'rutaSilaboPDF_CursoLocalMalla' => $rutaSilaboPDF,
        ];
    }
}
