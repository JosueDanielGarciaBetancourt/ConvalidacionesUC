<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    public function run(): void
    {
        //Cursos locales

        $cursos2015 = $this->getCursosLocales2015(2015, 'Local');
        $cursos2018 = $this->getCursosLocales2018(2018, 'Local');
        $cursos2024 = $this->getCursosLocales2024(2024, 'Local');

        foreach ($cursos2015 as $curso) {
            Curso::create($curso);
        }

        foreach ($cursos2018 as $curso) {
            Curso::create($curso);
        }

        foreach ($cursos2024 as $curso) {
            Curso::create($curso);
        }

        //Cursos postulantes

    }

    /* Para los cursos locales solo se usarán los campos: 
        $id
        $anioMalla
        $tipo
        $periodo
        $nombre
        $horasTeoricas
        $horasPracticas
        $creditos
        $caracter
        $sumillaSilabo
        $estado
        $rutaSilaboPDF*/
            
    // Todas las sumillas son generadas por IA, debido a que no se cuenta con la data precisa

    private function getCursosLocales2015($anioMalla, $tipo): array
    {   
        return [
            //Periodo 1
            $this->crearCurso('ASUC00112', $anioMalla,  $tipo, 1, 'Comunicación', 2, 2, 3, 'Obligatorio',
                                'El curso Comunicación está diseñado para proporcionar a los estudiantes 
                                una comprensión profunda de los principios y técnicas de la comunicación efectiva
                                en diversos contextos. A lo largo del curso, los estudiantes explorarán la teoría
                                de la comunicación, los procesos interpersonales, la comunicación organizacional 
                                y los medios de comunicación de masas.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00112-' . $anioMalla . '.pdf'),

            $this->crearCurso('ASUC00315', $anioMalla,  $tipo,  1, 'Estrategias y Técnicas de Estudio', 2, 2, 3, 'Obligatorio', 
                                'El curso de Estrategias y Técnicas de Estudio proporciona a los estudiantes métodos y técnicas para mejorar 
                                su rendimiento académico, incluyendo técnicas de lectura eficientes, organización del tiempo, toma de apuntes
                                y preparación para exámenes.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00315-' . $anioMalla . '.pdf'),
            
            $this->crearCurso('ASUC00512', $anioMalla, $tipo, 1, 'Introducción a la Ingeniería', 2, 2, 3, 'Obligatorio',
                                'El curso de Introducción a la Ingeniería está diseñado para proporcionar a los estudiantes una 
                                visión general de la profesión de ingeniería, sus diferentes ramas y su impacto en la sociedad. 
                                Los estudiantes explorarán los principios fundamentales de la ingeniería, metodologías de resolución
                                 de problemas y ética profesional.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00512-' . $anioMalla . '.pdf'),
              
            $this->crearCurso('ASUC00562', $anioMalla, $tipo, 1, 'Matemática Discreta', 2, 4, 4, 'Obligatorio',
                                'El curso de Matemática Discreta introduce a los estudiantes a los conceptos fundamentales de las 
                                estructuras matemáticas discretas. Los temas incluyen lógica, teoría de conjuntos, relaciones y 
                                funciones, teoría de grafos, y principios de conteo. Este curso proporciona las bases matemáticas 
                                esenciales para la ciencia de la computación y otras disciplinas de ingeniería.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00562-' . $anioMalla . '.pdf'),
              
            $this->crearCurso('ASUC00672', $anioMalla, $tipo, 1, 'Pre Cálculo I', 4, 2, 5, 'Obligatorio',
                                'Pre Cálculo I es un curso diseñado para preparar a los estudiantes para el estudio del cálculo. 
                                El curso cubre funciones y sus gráficas, polinomios y funciones racionales, funciones exponenciales 
                                y logarítmicas, y trigonometría. Los estudiantes desarrollarán habilidades de pensamiento analítico y 
                                resolución de problemas necesarias para el éxito en cursos de matemáticas avanzadas.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00672-' . $anioMalla . '.pdf'),
              
            $this->crearCurso('ASUC00736', $anioMalla, $tipo, 1, 'Pre Cálculo I', 4, 2, 5, 'Obligatorio',
                                'Pre Cálculo I es un curso fundamental que prepara a los estudiantes para el estudio del cálculo y 
                                otras matemáticas avanzadas. El curso abarca el estudio de funciones, incluyendo funciones lineales,
                                 cuadráticas, polinómicas, racionales, exponenciales y logarítmicas. También se introduce a los estudiantes 
                                 a los conceptos de límites y continuidad como preparación para el cálculo.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00736-' . $anioMalla . '.pdf'),                    
            
            //Periodo 2
            $this->crearCurso('ASUC00065', $anioMalla, $tipo, 2, 'Cálculo I', 4, 2, 5, 'Obligatorio',
                                'El curso de Cálculo I introduce a los estudiantes en los conceptos fundamentales del
                                cálculo diferencial e integral. Se cubren temas como límites, continuidad, derivadas
                                y sus aplicaciones, así como una introducción a la integración. Este curso 
                                proporciona las bases matemáticas esenciales para futuros cursos de ingeniería y
                                ciencias.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00065-' . $anioMalla . '.pdf'),

            $this->crearCurso('ASUC01042', $anioMalla, $tipo, 2, 'Derecho Informático para Ingeniería', 2, 2, 3, 'Obligatorio',
                                'Este curso aborda los aspectos legales y éticos relacionados con la tecnología 
                                de la información. Los temas incluyen propiedad intelectual, privacidad de datos, 
                                seguridad informática y regulaciones tecnológicas. Los estudiantes aprenderán a 
                                navegar por el panorama legal en el campo de la ingeniería informática.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC01042-' . $anioMalla . '.pdf'),

            $this->crearCurso('ASUC00673', $anioMalla, $tipo, 2, 'Pre cálculo II', 4, 2, 5, 'Obligatorio',
                                'Pre cálculo II es una continuación del curso Pre cálculo I, profundizando en temas 
                                como funciones trigonométricas, identidades y ecuaciones trigonométricas, vectores y
                                números complejos. Este curso prepara a los estudiantes para el estudio del cálculo y
                                otras matemáticas avanzadas en ingeniería.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00673-' . $anioMalla . '.pdf'),

            $this->crearCurso('ASUC00687', $anioMalla, $tipo, 2, 'Programación I', 2, 4, 4, 'Obligatorio',
                                'Programación I introduce a los estudiantes en los fundamentos de la programación 
                                de computadoras. El curso cubre conceptos básicos como tipos de datos, estructuras 
                                de control, funciones y manejo de errores. Los estudiantes aprenderán a diseñar,
                                implementar y depurar programas simples.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00687-' . $anioMalla . '.pdf'),

            $this->crearCurso('ASUC00798', $anioMalla, $tipo, 2, 'Sistemas de Información', 2, 4, 4, 'Obligatorio',
                                'Este curso proporciona una visión general de los sistemas de información en las 
                                organizaciones. Los temas incluyen tipos de sistemas de información, infraestructura 
                                tecnológica, gestión de datos y seguridad de la información. Los estudiantes 
                                aprenderán cómo los sistemas de información apoyan los procesos de negocio y la
                                toma de decisiones.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00798-' . $anioMalla . '.pdf'),

            //Periodo 3
            $this->crearCurso('ASUC00005', $anioMalla, $tipo, 3, 'Administración', 2, 2, 3, 'Obligatorio',
                                'El curso de Administración introduce a los estudiantes en los principios 
                                fundamentales de la gestión empresarial. Se cubren temas como planificación, 
                                organización, dirección y control. Los estudiantes aprenderán sobre las funciones 
                                clave de la administración y su aplicación en diversos contextos organizacionales.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00005-' . $anioMalla . '.pdf'),

            $this->crearCurso('ASUC00056', $anioMalla, $tipo, 3, 'Biología', 2, 2, 3, 'Obligatorio',
                                'Este curso proporciona una introducción a los principios fundamentales de la 
                                biología. Los temas incluyen la estructura y función celular, genética, evolución 
                                y ecología. Los estudiantes adquirirán una comprensión básica de los sistemas vivos
                                y su interacción con el medio ambiente.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00056-' . $anioMalla . '.pdf'),

            $this->crearCurso('ASUC00066', $anioMalla, $tipo, 3, 'Cálculo II', 4, 2, 5, 'Obligatorio',
                                'Cálculo II es una continuación de Cálculo I, profundizando en el cálculo integral 
                                y sus aplicaciones. Los temas incluyen técnicas de integración, integrales impropias,
                                series infinitas y ecuaciones diferenciales básicas. Este curso proporciona herramientas
                                matemáticas esenciales para la ingeniería y las ciencias aplicadas.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00066-' . $anioMalla . '.pdf'),

            $this->crearCurso('ASUC00251', $anioMalla, $tipo, 3, 'Ecología', 2, 2, 3, 'Obligatorio',
                                'El curso de Ecología introduce a los estudiantes en los principios fundamentales 
                                de las interacciones entre los organismos y su entorno. Se cubren temas como ecosistemas,
                                ciclos biogeoquímicos, poblaciones y comunidades. Los estudiantes desarrollarán una 
                                comprensión de los problemas ambientales y la importancia de la conservación.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00251-' . $anioMalla . '.pdf'),

            $this->crearCurso('ASUC00347', $anioMalla, $tipo, 3, 'Física I', 2, 4, 4, 'Obligatorio',
                                'Física I introduce a los estudiantes en los principios fundamentales de la mecánica
                                clásica. Los temas incluyen cinemática, dinámica, trabajo y energía, y sistemas de 
                                partículas. Este curso proporciona las bases para entender los fenómenos físicos y 
                                su aplicación en la ingeniería.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00347-' . $anioMalla . '.pdf'),

            $this->crearCurso('ASUC00688', $anioMalla, $tipo, 3, 'Programación II', 2, 4, 4, 'Obligatorio',
                                'Programación II es una continuación de Programación I, profundizando en conceptos
                                avanzados de programación. Los temas incluyen estructuras de datos, algoritmos de 
                                búsqueda y ordenamiento, programación orientada a objetos y manejo de archivos.
                                Los estudiantes desarrollarán habilidades para crear programas más complejos y
                                eficientes.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00688-' . $anioMalla . '.pdf'),

            //Periodo 4
            $this->crearCurso('ASUC00939', $anioMalla, $tipo, 4, 'Análisis y Requerimientos de Software', 4, 2, 5, 'Obligatorio',
                                'Este curso se enfoca en las técnicas y metodologías para el análisis y especificación
                                 de requisitos de software. Los estudiantes aprenderán a identificar, documentar y 
                                 validar los requisitos del usuario, así como a crear modelos de sistemas utilizando 
                                 diversas herramientas y notaciones.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00939-' . $anioMalla . '.pdf'),

            $this->crearCurso('ASUC00256', $anioMalla, $tipo, 4, 'Economía I', 2, 2, 3, 'Obligatorio',
                                'Economía I introduce a los estudiantes en los principios fundamentales de la 
                                microeconomía. Se cubren temas como oferta y demanda, comportamiento del consumidor, 
                                teoría de la producción y estructuras de mercado. Los estudiantes desarrollarán una 
                                comprensión de cómo funcionan los mercados y cómo se toman las decisiones económicas.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00256-' . $anioMalla . '.pdf'),

            $this->crearCurso('ASUC00316', $anioMalla, $tipo, 4, 'Estructura de Datos', 2, 2, 3, 'Obligatorio',
                                'Este curso se centra en el estudio de las estructuras de datos fundamentales y 
                                los algoritmos asociados. Los temas incluyen listas, pilas, colas, árboles, grafos 
                                y técnicas de hashing. Los estudiantes aprenderán a implementar estas estructuras y 
                                a analizar su eficiencia en términos de tiempo y espacio.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00316-' . $anioMalla . '.pdf'),

            $this->crearCurso('ASUC00348', $anioMalla, $tipo, 4, 'Física II', 2, 4, 4, 'Obligatorio',
                                'Física II es una continuación de Física I, centrándose en los conceptos de 
                                electricidad y magnetismo. Los temas incluyen campos eléctricos y magnéticos, ley de 
                                Coulomb, ley de Ampère, inducción electromagnética y circuitos eléctricos. Este curso
                                proporciona las bases para entender los fenómenos electromagnéticos y su aplicación en
                                la ingeniería.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00348-' . $anioMalla . '.pdf'),

            $this->crearCurso('ASUC00677', $anioMalla, $tipo, 4, 'Probabilidad y Estadística', 2, 4, 4, 'Obligatorio',
                                'Este curso introduce a los estudiantes en los conceptos fundamentales de 
                                probabilidad y estadística. Los temas incluyen teoría de la probabilidad, variables 
                                aleatorias, distribuciones de probabilidad, inferencia estadística y regresión. Los 
                                estudiantes aprenderán a aplicar estos conceptos en el análisis de datos y la toma 
                                de decisiones.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00677-' . $anioMalla . '.pdf'),

            $this->crearCurso('ASUC00707', $anioMalla, $tipo, 4, 'Psicología', 2, 2, 3, 'Obligatorio',
                                'El curso de Psicología proporciona una introducción a los principios fundamentales 
                                del comportamiento y los procesos mentales humanos. Se cubren temas como percepción, 
                                aprendizaje, memoria, motivación y desarrollo. Los estudiantes desarrollarán una 
                                comprensión básica de cómo funciona la mente humana y cómo se aplica la psicología 
                                en diversos contextos.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00707-' . $anioMalla . '.pdf'),

            //Periodo 5
            $this->crearCurso('ASUC00051', $anioMalla, $tipo, 5, 'Base de Datos', 2, 4, 4, 'Obligatorio',
                                'Este curso introduce a los estudiantes en los conceptos fundamentales de las 
                                bases de datos. Los temas incluyen modelado de datos, diseño de bases de datos 
                                relacionales, lenguaje SQL y gestión de transacciones. Los estudiantes aprenderán a 
                                diseñar, implementar y manipular bases de datos eficientes.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00051-' . $anioMalla . '.pdf'),

            $this->crearCurso('ASUC00130', $anioMalla, $tipo, 5, 'Contabilidad', 2, 2, 3, 'Obligatorio',
                                'El curso de Contabilidad proporciona una introducción a los principios y prácticas 
                                contables. Los estudiantes aprenderán sobre el ciclo contable, preparación de estados
                                financieros, análisis de costos y presupuestos. Este curso desarrolla habilidades
                                esenciales para la gestión financiera en el contexto de la ingeniería.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00130-' . $anioMalla . '.pdf'),

            $this->crearCurso('ASUC00954', $anioMalla, $tipo, 5, 'Discapacidad e Integración', 2, false, 2, 'Obligatorio',
                                'Este curso sensibiliza a los estudiantes sobre las cuestiones relacionadas con la 
                                discapacidad y la inclusión. Se abordan temas como tipos de discapacidad, legislación,
                                accesibilidad y diseño universal. Los estudiantes aprenderán a considerar las 
                                necesidades de las personas con discapacidad en el diseño de productos y servicios.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00954-' . $anioMalla . '.pdf'),

            $this->crearCurso('ASUC00957', $anioMalla, $tipo, 5, 'Diseño de Software', 2, 4, 4, 'Obligatorio',
                                'El curso de Diseño de Software se enfoca en los principios y técnicas para diseñar 
                                sistemas de software robustos y escalables. Los temas incluyen patrones de diseño, 
                                arquitectura de software, modelado UML y principios SOLID. Los estudiantes aprenderán 
                                a crear diseños de software efectivos y mantenibles.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00957-' . $anioMalla . '.pdf'),

            $this->crearCurso('ASUC00305', $anioMalla, $tipo, 5, 'Estadística Aplicada', 2, 4, 4, 'Obligatorio',
                                'Este curso se centra en la aplicación de métodos estadísticos en la ingeniería y 
                                las ciencias. Los temas incluyen diseño de experimentos, análisis de varianza, 
                                regresión múltiple y series de tiempo. Los estudiantes aprenderán a utilizar 
                                herramientas estadísticas para analizar datos y tomar decisiones basadas en evidencia.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00305-' . $anioMalla . '.pdf'),

            $this->crearCurso('ASUC00340', $anioMalla, $tipo, 5, 'Filosofía y Ética', 2, false, 2, 'Obligatorio',
                                'Este curso introduce a los estudiantes en los conceptos fundamentales de la 
                                filosofía y la ética, con un enfoque en su aplicación en la ingeniería. Se abordan 
                                temas como teorías éticas, responsabilidad profesional y dilemas éticos en la 
                                tecnología. Los estudiantes desarrollarán habilidades de pensamiento crítico y 
                                razonamiento ético.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00340-' . $anioMalla . '.pdf'),

            $this->crearCurso('ASUC00637', $anioMalla, $tipo, 5, 'Organización y Arquitectura del Computador', 2, 2, 3, 'Obligatorio',
                                'Este curso examina la estructura y funcionamiento interno de los sistemas de
                                 computación. Los temas incluyen diseño de CPU, jerarquía de memoria, sistemas de 
                                 entrada/salida y arquitecturas paralelas. Los estudiantes comprenderán cómo el 
                                 hardware y el software interactúan para crear sistemas computacionales eficientes.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00637-' . $anioMalla . '.pdf'),
              
            //Periodo 6 
            $this->crearCurso('ASUC00006', $anioMalla, $tipo, 6, 'Administración de Base de Datos', 2, 2, 3, 'Obligatorio',
                                'Este curso se enfoca en la gestión y administración de sistemas de bases de datos. Los 
                                temas incluyen diseño físico de bases de datos, optimización de consultas, seguridad, 
                                recuperación y ajuste de rendimiento. Los estudiantes aprenderán a mantener y optimizar 
                                sistemas de bases de datos en entornos empresariales.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00006-' . $anioMalla . '.pdf'),
              
            $this->crearCurso('ASUC00947', $anioMalla, $tipo, 6, 'Construcción de Software', 4, 2, 5, 'Obligatorio',
                                'Este curso se centra en las prácticas y técnicas para la construcción de software de alta 
                                calidad. Los temas incluyen patrones de diseño, refactorización, control de versiones y 
                                integración continua. Los estudiantes aprenderán a implementar diseños de software y a 
                                utilizar herramientas modernas de desarrollo.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00947-' . $anioMalla . '.pdf'),
              
            $this->crearCurso('ASUC00470', $anioMalla, $tipo, 6, 'Inglés Profesional I', 2, 2, 3, 'Obligatorio',
                                'Este curso desarrolla las habilidades de inglés en un contexto profesional. Se enfoca en
                                la comunicación oral y escrita, vocabulario técnico y habilidades de presentación. Los 
                                estudiantes mejorarán su capacidad para comunicarse efectivamente en inglés en entornos 
                                laborales internacionales.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00470-' . $anioMalla . '.pdf'),
              
            $this->crearCurso('ASUC00584', $anioMalla, $tipo, 6, 'Metodología de Investigación', 2, 2, 3, 'Obligatorio',
                                'Este curso introduce a los estudiantes en los principios y métodos de la investigación 
                                científica. Los temas incluyen diseño de investigación, recolección y análisis de datos, 
                                y redacción de informes científicos. Los estudiantes aprenderán a formular preguntas de 
                                investigación y a conducir estudios rigurosos.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00584-' . $anioMalla . '.pdf'),
              
            $this->crearCurso('ASUC01006', $anioMalla, $tipo, 6, 'Pruebas y Calidad de Software', 2, 4, 4, 'Obligatorio',
                                'Este curso se enfoca en las técnicas y estrategias para asegurar la calidad del software. 
                                Los temas incluyen tipos de pruebas, automatización de pruebas, métricas de calidad y 
                                gestión de defectos. Los estudiantes aprenderán a diseñar y ejecutar planes de prueba 
                                efectivos para mejorar la calidad del software.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC01006-' . $anioMalla . '.pdf'),
              
            $this->crearCurso('ASUC00754', $anioMalla, $tipo, 6, 'Redes de Computadores', 2, 4, 4, 'Obligatorio',
                                'Este curso proporciona una introducción a los principios y prácticas de las redes de 
                                computadoras. Los temas incluyen arquitecturas de red, protocolos de comunicación, 
                                direccionamiento IP y seguridad de red. Los estudiantes aprenderán a diseñar, implementar 
                                y solucionar problemas en redes de computadoras.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00754-' . $anioMalla . '.pdf'),
              
            $this->crearCurso('ASUC01061', $anioMalla, $tipo, 6, 'Sistemas Operativos', 2, 2, 3, 'Obligatorio',
                                'Este curso examina los principios y la estructura de los sistemas operativos modernos. 
                                Los temas incluyen gestión de procesos, planificación de CPU, gestión de memoria y sistemas 
                                de archivos. Los estudiantes comprenderán cómo los sistemas operativos gestionan los 
                                recursos del hardware y proporcionan una interfaz para las aplicaciones.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC01061-' . $anioMalla . '.pdf'),
              
            //Periodo 7
            $this->crearCurso('ASUC00123', $anioMalla, $tipo, 7, 'Conmutación y Enrutamiento', 2, 4, 4, 'Obligatorio',
                                'Este curso profundiza en los conceptos de conmutación y enrutamiento en redes de 
                                computadoras. Los temas incluyen protocolos de enrutamiento, VLANs, NAT y solución de 
                                problemas de red. Los estudiantes aprenderán a diseñar y configurar redes empresariales 
                                complejas.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00123-' . $anioMalla . '.pdf'),
              
            $this->crearCurso('ASUC00360', $anioMalla, $tipo, 7, 'Formulación y Evaluación de Proyectos de Inversión', 2, 2, 3, 'Obligatorio',
                                'Este curso enseña a los estudiantes cómo formular, evaluar y gestionar proyectos de 
                                inversión. Los temas incluyen análisis de mercado, evaluación financiera, análisis de 
                                riesgos y toma de decisiones de inversión. Los estudiantes aprenderán a desarrollar y 
                                evaluar propuestas de proyectos viables.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00360-' . $anioMalla . '.pdf'),
              
            $this->crearCurso('ASUC00471', $anioMalla, $tipo, 7, 'Inglés Profesional II', 2, 2, 3, 'Obligatorio',
                                'Este curso es una continuación de Inglés Profesional I, enfocándose en habilidades 
                                avanzadas de comunicación en inglés en contextos profesionales. Los estudiantes 
                                perfeccionarán sus habilidades de escritura técnica, presentación y negociación 
                                en inglés.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00471-' . $anioMalla . '.pdf'),
              
            $this->crearCurso('ASUC00528', $anioMalla, $tipo, 7, 'Investigación de Operaciones', 2, 4, 4, 'Obligatorio',
                                'Este curso introduce a los estudiantes en los métodos cuantitativos para la toma de 
                                decisiones en ingeniería y gestión. Los temas incluyen programación lineal, modelos de 
                                transporte y asignación, teoría de colas y simulación. Los estudiantes aprenderán a 
                                aplicar estas técnicas para resolver problemas complejos de optimización.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00528-' . $anioMalla . '.pdf'),
              
            $this->crearCurso('ASUC01003', $anioMalla, $tipo, 7, 'Procesos de Software', 4, 2, 5, 'Obligatorio',
                                'Este curso examina los procesos y metodologías utilizados en el desarrollo de software. 
                                Los temas incluyen modelos de ciclo de vida, gestión de proyectos de software, estimación 
                                y planificación, y mejora de procesos. Los estudiantes aprenderán a seleccionar y aplicar 
                                procesos apropiados para diferentes tipos de proyectos de software.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC01003-' . $anioMalla . '.pdf'),
              
            $this->crearCurso('ASUC00802', $anioMalla, $tipo, 7, 'Sistemas de Información Integrados', 2, 2, 3, 'Obligatorio',
                                'Este curso se enfoca en el diseño e implementación de sistemas de información 
                                empresariales integrados. Los temas incluyen ERP, CRM, cadena de suministro y business 
                                intelligence. Los estudiantes aprenderán cómo estos sistemas apoyan los procesos de negocio 
                                y la toma de decisiones en las organizaciones.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00802-' . $anioMalla . '.pdf'),
              
            $this->crearCurso('ASUC00304', $anioMalla, $tipo, 7, 'Escalamiento de Redes de Computadoras', 2, 2, 3, 'Electivo',
                                'Este curso avanzado se centra en el diseño y implementación de redes de gran escala. 
                                Los temas incluyen protocolos de enrutamiento avanzados, IPv6, redes definidas por software 
                                y virtualización de redes. Los estudiantes aprenderán a diseñar y gestionar infraestructuras
                                de red complejas y escalables.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00304-' . $anioMalla . '.pdf'),
              
            $this->crearCurso('ASUC00472', $anioMalla, $tipo, 7, 'Iniciativa Empresarial', 2, 2, 3, 'Electivo',
                                'Este curso fomenta el espíritu emprendedor y proporciona las herramientas necesarias 
                                para iniciar y gestionar un negocio. Los temas incluyen identificación de oportunidades, 
                                desarrollo de modelos de negocio, financiación y gestión de startups. Los estudiantes 
                                aprenderán a convertir ideas innovadoras en empresas viables.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00472-' . $anioMalla . '.pdf'),
              
            $this->crearCurso('ASUC00587', $anioMalla, $tipo, 7, 'Metodologías Ágiles de Desarrollo de Software', 2, 2, 3, 'Electivo',
                                'Este curso se enfoca en las metodologías ágiles para el desarrollo de software. Los 
                                temas incluyen Scrum, Kanban, XP y DevOps. Los estudiantes aprenderán a aplicar principios 
                                ágiles para gestionar proyectos de software de manera eficiente y adaptativa.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00587-' . $anioMalla . '.pdf'),
              
            //Periodo 8
            $this->crearCurso('ASUC00225', $anioMalla, $tipo, 8, 'Dirección de Proyectos', 2, 2, 3, 'Obligatorio',
                                'Este curso proporciona una comprensión integral de la gestión de proyectos en el contexto 
                                de la ingeniería de sistemas. Los temas incluyen iniciación, planificación, ejecución, 
                                monitoreo y cierre de proyectos. Los estudiantes aprenderán a aplicar metodologías estándar 
                                como PMBOK para gestionar proyectos de manera efectiva.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00225-' . $anioMalla . '.pdf'),
              
            $this->crearCurso('ASUC00281', $anioMalla, $tipo, 8, 'Emprendimiento e Innovación', 2, 2, 3, 'Obligatorio',
                                'Este curso fomenta el pensamiento innovador y las habilidades emprendedoras. Los temas 
                                incluyen ideación, validación de ideas, diseño de modelos de negocio y pitch de startups. 
                                Los estudiantes aprenderán a identificar oportunidades de mercado y a desarrollar soluciones 
                                innovadoras.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00281-' . $anioMalla . '.pdf'),
              
            $this->crearCurso('ASUC00364', $anioMalla, $tipo, 8, 'Fundamentos de Arquitectura Empresarial', 2, 4, 4, 'Obligatorio',
                                'Este curso introduce los conceptos y prácticas de la arquitectura empresarial. Los temas 
                                incluyen frameworks de arquitectura empresarial, alineación estratégica, arquitectura de 
                                negocio, datos, aplicaciones e infraestructura. Los estudiantes aprenderán a diseñar y 
                                gestionar arquitecturas que apoyen los objetivos organizacionales.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00364-' . $anioMalla . '.pdf'),
              
            $this->crearCurso('ASUC00490', $anioMalla, $tipo, 8, 'Inteligencia de Negocios', 2, 2, 3, 'Obligatorio',
                                'Este curso se enfoca en el uso de datos para la toma de decisiones empresariales. Los 
                                temas incluyen data warehousing, ETL, OLAP, minería de datos y visualización. Los 
                                estudiantes aprenderán a diseñar e implementar soluciones de BI para apoyar la toma de 
                                decisiones estratégicas.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00490-' . $anioMalla . '.pdf'),
              
            $this->crearCurso('ASUC00750', $anioMalla, $tipo, 8, 'Redacción Científica y Académica', 2, 2, 3, 'Obligatorio',
                                'Este curso desarrolla habilidades de escritura para contextos académicos y científicos. 
                                Los temas incluyen estructura de artículos científicos, revisión de literatura, citación y 
                                ética en la publicación. Los estudiantes aprenderán a comunicar eficazmente sus 
                                investigaciones y hallazgos.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00750-' . $anioMalla . '.pdf'),
              
            $this->crearCurso('ASUC00845', $anioMalla, $tipo, 8, 'Taller de Liderazgo', 2, 2, 3, 'Obligatorio',
                                'Este taller desarrolla habilidades de liderazgo esenciales para ingenieros. Los temas 
                                incluyen estilos de liderazgo, comunicación efectiva, resolución de conflictos y gestión 
                                de equipos. Los estudiantes aprenderán a liderar equipos técnicos y proyectos de manera 
                                efectiva.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00845-' . $anioMalla . '.pdf'),
                               
            $this->crearCurso('ASUC00940', $anioMalla, $tipo, 8, 'Arquitectura orientada a servicios', 2, 2, 3, 'Electivo',
                                'Este curso se centra en los principios y prácticas de la arquitectura orientada a 
                                servicios (SOA). Los temas incluyen diseño de servicios web, protocolos de comunicación,
                                 orquestación de servicios y microservicios. Los estudiantes aprenderán a diseñar e 
                                 implementar sistemas distribuidos escalables y flexibles.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00940-' . $anioMalla . '.pdf'),
              
            $this->crearCurso('ASUC00756', $anioMalla, $tipo, 8, 'Redes WAN', 2, 2, 3, 'Electivo',
                                'Este curso se enfoca en el diseño y implementación de redes de área amplia (WAN). Los 
                                temas incluyen tecnologías WAN, protocolos de enrutamiento, VPNs y optimización del 
                                rendimiento. Los estudiantes aprenderán a diseñar y gestionar redes que conectan 
                                ubicaciones geográficamente dispersas.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00756-' . $anioMalla . '.pdf'),
              
            $this->crearCurso('ASUC00846', $anioMalla, $tipo, 8, 'Taller de Liderazgo Emprendedor', 2, 2, 3, 'Electivo',
                                'Este taller combina habilidades de liderazgo con el espíritu emprendedor. 
                                Los estudiantes desarrollarán competencias en liderazgo, innovación, toma de decisiones
                                y gestión de equipos en el contexto de startups y nuevos proyectos empresariales.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00846-' . $anioMalla . '.pdf'),
              
            //Periodo 9
            $this->crearCurso('ASUC00097', $anioMalla, $tipo, 9, 'Cloud Computing', 2, 2, 3, 'Obligatorio',
                                'Este curso introduce los conceptos y tecnologías de la computación en la nube. 
                                Los temas incluyen modelos de servicio en la nube, virtualización, contenedores y
                                seguridad en la nube. Los estudiantes aprenderán a diseñar, implementar y gestionar
                                soluciones basadas en la nube.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00097-' . $anioMalla . '.pdf'),
              
            $this->crearCurso('ASUC00413', $anioMalla, $tipo, 9, 'Gestión de Servicios TI', 2, 2, 3, 'Obligatorio',
                                'Este curso se enfoca en la gestión eficiente de servicios de tecnología de la 
                                información. Los temas incluyen ITIL, gestión de incidentes, gestión de cambios y 
                                mejora continua del servicio. Los estudiantes aprenderán a alinear los servicios 
                                de TI con las necesidades del negocio.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00413-' . $anioMalla . '.pdf'),
              
            $this->crearCurso('ASUC00469', $anioMalla, $tipo, 9, 'Ingeniería Web', 2, 4, 4, 'Obligatorio',
                                'Este curso cubre los principios y tecnologías para el desarrollo de aplicaciones 
                                web avanzadas. Los temas incluyen arquitecturas web, frameworks frontend y backend,
                                 APIs RESTful y seguridad web. Los estudiantes aprenderán a diseñar y desarrollar
                                  aplicaciones web robustas y escalables.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00469-' . $anioMalla . '.pdf'),
              
            $this->crearCurso('ASUC01018', $anioMalla, $tipo, 9, 'Taller de Investigación I', 2, 4, 4, 'Obligatorio',
                                'Este taller proporciona a los estudiantes las habilidades necesarias para iniciar 
                                un proyecto de investigación. Los temas incluyen formulación de problemas de 
                                investigación, revisión de literatura y diseño de metodologías. Los estudiantes 
                                comenzarán a desarrollar sus propuestas de investigación.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC01018-' . $anioMalla . '.pdf'),
              
            $this->crearCurso('ASUC00854', $anioMalla, $tipo, 9, 'Taller de proyectos de Ingeniería I', 4, 2, 5, 'Obligatorio',
                                'Este taller se centra en la aplicación práctica de los conocimientos de ingeniería 
                                en proyectos reales. Los estudiantes trabajarán en equipos para definir, planificar 
                                y comenzar la implementación de un proyecto de ingeniería, aplicando metodologías de
                                gestión de proyectos.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00854-' . $anioMalla . '.pdf'),
              
            $this->crearCurso('ASUC00209', $anioMalla, $tipo, 9, 'Desarrollo de Soluciones Móviles', 2, 2, 3, 'Electivo',
                                'Este curso se enfoca en el diseño y desarrollo de aplicaciones para dispositivos 
                                móviles. Los temas incluyen plataformas móviles, diseño de interfaces para móviles, 
                                almacenamiento de datos local y en la nube, y publicación de apps. Los estudiantes 
                                aprenderán a crear aplicaciones móviles efectivas y atractivas.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00209-' . $anioMalla . '.pdf'),
              
            $this->crearCurso('ASUC00452', $anioMalla, $tipo, 9, 'Incubación Empresarial I', 2, 2, 3, 'Electivo',
                                'Este curso proporciona a los estudiantes la oportunidad de desarrollar sus ideas de 
                                negocio. Los temas incluyen validación de ideas, desarrollo de modelos de negocio, 
                                prototipado y pitch. Los estudiantes comenzarán a transformar sus conceptos en 
                                startups viables.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00452-' . $anioMalla . '.pdf'),
              
            $this->crearCurso('ASUC00769', $anioMalla, $tipo, 9, 'Seguridad de la información corporativa', 2, 2, 3, 'Electivo',
                                'Este curso se centra en la protección de la información en entornos empresariales. 
                                Los temas incluyen políticas de seguridad, gestión de riesgos, criptografía, 
                                seguridad de redes y respuesta a incidentes. Los estudiantes aprenderán a diseñar 
                                e implementar estrategias de seguridad integral para organizaciones.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00769-' . $anioMalla . '.pdf'),
              
            //Periodo 10
            $this->crearCurso('ASUC00941', $anioMalla, $tipo, 10, 'Auditoría de Sistemas', 2, 4, 4, 'Obligatorio',
                                'Este curso aborda los principios y prácticas de la auditoría de sistemas de información. 
                                Los temas incluyen estándares de auditoría, evaluación de controles, análisis de riesgos 
                                y técnicas de auditoría asistidas por computadora. Los estudiantes aprenderán a planificar
                                 y realizar auditorías de sistemas de información.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00941-' . $anioMalla . '.pdf'),
              
            $this->crearCurso('ASUC00614', $anioMalla, $tipo, 10, 'Negocios Electrónicos', 2, 2, 3, 'Obligatorio',
                                'Este curso explora las estrategias y tecnologías para hacer negocios en la era digital.
                                Los temas incluyen modelos de negocio electrónico, comercio electrónico, marketing 
                                digital y sistemas de pago en línea. Los estudiantes aprenderán a desarrollar y
                                implementar estrategias de negocio electrónico efectivas.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00614-' . $anioMalla . '.pdf'),
              
            $this->crearCurso('ASUC00662', $anioMalla, $tipo, 10, 'Planeamiento Estratégico de los SI/TI', 2, 2, 3, 'Obligatorio',
                                'Este curso se enfoca en la alineación de las estrategias de sistemas de información 
                                y tecnología de la información con los objetivos empresariales. Los temas incluyen
                                análisis estratégico, planificación de SI/TI, gobierno de TI y gestión del cambio.
                                Los estudiantes aprenderán a desarrollar planes estratégicos de SI/TI efectivos.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00662-' . $anioMalla . '.pdf'),
              
            $this->crearCurso('ASUC01020', $anioMalla, $tipo, 10, 'Taller de Investigación II', 2, 4, 4, 'Obligatorio',
                                'Este taller es una continuación del Taller de Investigación I, donde los estudiantes
                                desarrollan y finalizan sus proyectos de investigación. Los temas incluyen recolección 
                                y análisis de datos, interpretación de resultados y redacción de informes de 
                                investigación. Los estudiantes completarán y presentarán sus proyectos de 
                                investigación.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC01020-' . $anioMalla . '.pdf'),
              
            $this->crearCurso('ASUC00855', $anioMalla, $tipo, 10, 'Taller de proyectos de Ingeniería II', 4, 2, 5, 'Obligatorio',
                                'Este taller es una continuación del Taller de proyectos de Ingeniería I, donde 
                                los estudiantes completan la implementación y presentación de sus proyectos. Se 
                                enfoca en la ejecución, seguimiento, control y cierre de proyectos de ingeniería. 
                                Los estudiantes finalizarán y presentarán sus proyectos, demostrando sus habilidades 
                                en ingeniería y gestión de proyectos.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00855-' . $anioMalla . '.pdf'),
              
            $this->crearCurso('ASUC00210', $anioMalla, $tipo, 10, 'Desarrollo de Videojuegos', 2, 2, 3, 'Electivo',
                                'Este curso introduce a los estudiantes en el diseño y desarrollo de videojuegos. 
                                Los temas incluyen motores de juegos, diseño de niveles, gráficos y animación, 
                                inteligencia artificial para juegos y audio. Los estudiantes aprenderán a crear 
                                juegos interactivos y atractivos utilizando herramientas y técnicas modernas.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00210-' . $anioMalla . '.pdf'),
              
            $this->crearCurso('ASUC00381', $anioMalla, $tipo, 10, 'Gerencia de la Seguridad de Información', 2, 2, 3, 'Electivo',
                                'Este curso se enfoca en la gestión estratégica de la seguridad de la información 
                                en organizaciones. Los temas incluyen gobierno de seguridad, gestión de riesgos, 
                                cumplimiento normativo y respuesta a incidentes. Los estudiantes aprenderán a 
                                desarrollar y liderar programas de seguridad de información efectivos.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00381-' . $anioMalla . '.pdf'),
              
            $this->crearCurso('ASUC00453', $anioMalla, $tipo, 10, 'Incubación Empresarial II', 2, 2, 3, 'Electivo',
                                'Este curso es una continuación de Incubación Empresarial I, centrado en el 
                                crecimiento y la consolidación de startups. Los temas incluyen estrategias de 
                                crecimiento, financiación, operaciones y escalabilidad. Los estudiantes desarrollarán
                                planes para llevar sus startups al siguiente nivel, preparándose para el lanzamiento 
                                al mercado.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00453-' . $anioMalla . '.pdf'),
           ];
    }

    private function getCursosLocales2018($anioMalla, $tipo): array
    {
        return [
            //Periodo 1
            $this->crearCurso('ASUC00512', $anioMalla, $tipo, 1, 'Introducción a la Ingeniería de Sistemas e Informática', 2, 2, 3, 'Obligatorio', 
                                'Este curso ofrece una introducción a los fundamentos de la ingeniería de sistemas 
                                e informática, cubriendo temas clave como programación, redes y bases de datos.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00512-'. $anioMalla. '.pdf'),

            $this->crearCurso('ASUC01082', $anioMalla, $tipo, 1, 'Gestión del Aprendizaje', 2, 2, 3, 'Obligatorio', 
                                'El curso de Gestión del Aprendizaje se enfoca en estrategias y herramientas para
                                mejorar la eficiencia y efectividad en el proceso de aprendizaje.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC01082-'. $anioMalla. '.pdf'),
                            
            $this->crearCurso('ASUC01117', $anioMalla, $tipo, 1, 'Química 1', 2, 2, 3, 'Obligatorio', 
                                'Química 1 es un curso fundamental que introduce a los estudiantes a los conceptos 
                                básicos de la química, incluyendo reacciones y propiedades de los materiales.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC01117-'. $anioMalla. '.pdf'),
                            
            $this->crearCurso('ASUC01086', $anioMalla, $tipo, 1, 'Laboratorio de Liderazgo', 2, false, 2, 'Obligatorio', 
                                'El Laboratorio de Liderazgo ofrece experiencias prácticas para desarrollar 
                                habilidades de liderazgo entre los estudiantes, promoviendo el trabajo en 
                                equipo y la toma de decisiones.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC01086-'. $anioMalla. '.pdf'),
                            
           // Periodo 2
            $this->crearCurso('ASUC01075', $anioMalla, $tipo, 2, 'Comunicación Efectiva', 2, 2, 3, 'Obligatorio', 
                                'Este curso se centra en desarrollar habilidades de comunicación efectiva
                                tanto oral como escrita.',  false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC01075-' . $anioMalla . '.pdf'),
          
            $this->crearCurso('ASUC00562', $anioMalla, $tipo, 2, 'Matemática Discreta', 2, 4, 4, 'Obligatorio', 
                                'Matemática Discreta proporciona las bases teóricas para la computación y 
                                la lógica.',  false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00562-' . $anioMalla . '.pdf'),
            
            $this->crearCurso('ASUC01110', $anioMalla, $tipo, 2, 'Fundamentos del Cálculo', 2, 4, 4, 'Obligatorio', 
                                'Fundamentos del Cálculo cubre los conceptos básicos de cálculo diferencial
                                e integral.',  false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC01110-' . $anioMalla . '.pdf'),
        
            $this->crearCurso('ASUC01108', $anioMalla, $tipo, 2, 'Álgebra Matricial y Geometría Analítica', 2, 4, 4, 'Obligatorio',
                                'Álgebra Matricial y Geometría Analítica se enfoca en el estudio de matrices y sus
                                aplicaciones.',  false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC01108-' . $anioMalla . '.pdf'),
            
            $this->crearCurso('ASUC01112', $anioMalla, $tipo, 2, 'Gestión Basada en Procesos', 2, 2, 3, 'Obligatorio', 
                                'Gestión Basada en Procesos aborda los principios de gestión empresarial y 
                                mejora de procesos.',  false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC01112-' . $anioMalla . '.pdf'),

            // Periodo 3
            $this->crearCurso('ASUC01160', $anioMalla, $tipo, 3, 'Cálculo Diferencial', 4, 2, 5, 'Obligatorio', 
                                'Cálculo Diferencial se enfoca en el estudio de las derivadas y sus aplicaciones.',  false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC01160-' . $anioMalla . '.pdf'),
            
            $this->crearCurso('ASUC01312', $anioMalla, $tipo, 3, 'Fundamentos de Programación', 2, 4, 4, 'Obligatorio', 
                                'Fundamentos de Programación introduce a los estudiantes a los conceptos básicos de 
                                la programación.',  false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC01312-' . $anioMalla . '.pdf'),
            
            $this->crearCurso('ASUC00066', $anioMalla, $tipo, 3, 'Sistemas de Información', 2, 4, 4, 'Obligatorio', 
                                'Sistemas de Información aborda el diseño y la implementación de sistemas de 
                                información empresarial.',  false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00066-' . $anioMalla . '.pdf'),
            
            $this->crearCurso('ASUC01296', $anioMalla, $tipo, 3, 'Física 1', 2, 4, 4, 'Obligatorio', 
                                'Física 1 cubre los principios básicos de la mecánica y las leyes del movimiento.', false, 
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC01296-' . $anioMalla . '.pdf'),
            
            $this->crearCurso('ASUC01275', $anioMalla, $tipo, 3, 'Estadística General', 2, 2, 3, 'Obligatorio', 
                                'Estadística General introduce a los estudiantes a los conceptos básicos de la 
                                estadística descriptiva.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC01275-' . $anioMalla . '.pdf'),
            
            $this->crearCurso('ASUC01389', $anioMalla, $tipo, 3, 'Laboratorio de Innovación', false, 2, 1, 'Obligatorio', 
                                'Laboratorio de Innovación proporciona un espacio para la experimentación y la creatividad en el 
                                desarrollo de soluciones tecnológicas.',  false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC01389-' . $anioMalla . '.pdf'),

            // Periodo 4
            $this->crearCurso('ASUC01161', $anioMalla, $tipo, 4, 'Cálculo Integral', 4, 2, 5, 'Obligatorio', 
                                'Cálculo Integral se centra en el estudio de las integrales y sus aplicaciones.',  false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC01161-' . $anioMalla . '.pdf'),
            
            $this->crearCurso('ASUC01482', $anioMalla, $tipo, 4, 'Programación Orientada a Objetos', 2, 4, 4, 'Obligatorio', 
                                'Programación Orientada a Objetos enseña a los estudiantes a diseñar y desarrollar 
                                software utilizando el paradigma de la POO.',  false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC01482-' . $anioMalla . '.pdf'),
            
            $this->crearCurso('ASUC00316', $anioMalla, $tipo, 4, 'Estructura de Datos', 2, 2, 3, 'Obligatorio', 
                                'Estructura de Datos se enfoca en el estudio de las estructuras de datos y algoritmos 
                                para su manipulación.',  false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00316-' . $anioMalla . '.pdf'),
            
            $this->crearCurso('ASUC01297', $anioMalla, $tipo, 4, 'Física 2', 2, 4, 4, 'Obligatorio', 
                                'Física 2 aborda los conceptos avanzados de la mecánica, la termodinámica y
                                la electricidad.',  false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC01297-' . $anioMalla . '.pdf'),
            
            $this->crearCurso('ASUC01273', $anioMalla, $tipo, 4, 'Estadística Aplicada', 2, 2, 3, 'Obligatorio', 
                                'Estadística Aplicada se centra en la aplicación de técnicas estadísticas 
                                en situaciones del mundo real.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC01273-' . $anioMalla . '.pdf'),

            // Periodo 5
            $this->crearCurso('ASUC01136', $anioMalla, $tipo, 5, 'Análisis y Requerimientos de Software', 2, 4, 4, 'Obligatorio',
                                'Análisis y Requerimientos de Software se enfoca en la identificación y
                                especificación de requisitos de software.',  false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC01136-' . $anioMalla . '.pdf'),
           
            $this->crearCurso('ASUC00051', $anioMalla, $tipo, 5, 'Base de Datos', 2, 4, 4, 'Obligatorio', 
                                'Base de Datos cubre el diseño, implementación y gestión de bases de datos
                                 relacionales.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00051-' . $anioMalla . '.pdf'),
            
            $this->crearCurso('ASUC01635', $anioMalla, $tipo, 5, 'Discapacidad e Inclusión', 2, 2, 3, 'Electivo', 
                                'Discapacidad e Inclusión examina los desafíos y estrategias para la inclusión de personas con 
                                discapacidad en la sociedad y el trabajo.', false, 
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC01635-' . $anioMalla . '.pdf'),
            
            $this->crearCurso('ASUC01658', $anioMalla, $tipo, 5, 'Medio Ambiente y Ecología', 2, 2, 3, 'Electivo', 
                                'Medio Ambiente y Ecología aborda los problemas ambientales y las soluciones
                                sostenibles.',  false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC01658-' . $anioMalla . '.pdf'),

            // Periodo 6 
            $this->crearCurso('ASUC00957', $anioMalla, $tipo, 6, 'Diseño de Software', 2, 4, 4, 'Obligatorio', 
                                'Diseño de Software se enfoca en las técnicas y metodologías para el
                                diseño de sistemas de software.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00957-' . $anioMalla . '.pdf'),
            
            $this->crearCurso('ASUC01140', $anioMalla, $tipo, 6, 'Arquitectura del computador', 2, 4, 4, 'Obligatorio', 
                                'Arquitectura del computador cubre los principios y componentes de los sistemas 
                                informáticos.',  false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC01140-' . $anioMalla . '.pdf'),
            
            $this->crearCurso('ASUC00006', $anioMalla, $tipo, 6, 'Administración de Base de Datos', 2, 2, 3, 'Obligatorio',
                                'Administración de Base de Datos se centra en la gestión y optimización de 
                                sistemas de bases de datos.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00006-' . $anioMalla . '.pdf'),
                            
            $this->crearCurso('ASUC01532', $anioMalla, $tipo, 6, 'Seminario de Investigación', 2, 2, 3, 'Obligatorio',
                                'Seminario de Investigación proporciona las habilidades necesarias para 
                                realizar investigaciones en el campo de la informática.',  false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC01532-' . $anioMalla . '.pdf'),
                            
            $this->crearCurso('ASUC01061', $anioMalla, $tipo, 6, 'Sistemas Operativos', 2, 2, 3, 'Obligatorio', 
                                'Sistemas Operativos cubre los principios y funciones de los sistemas 
                                operativos modernos.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC01061-' . $anioMalla . '.pdf'),
            
            $this->crearCurso('ASUC01386', $anioMalla, $tipo, 6, 'Investigación Operativa', 2, 4, 4, 'Obligatorio', 
                                'Investigación Operativa se enfoca en el estudio de modelos matemáticos 
                                para la toma de decisiones.',  false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC01386-' . $anioMalla . '.pdf'),

            // Periodo 7
            $this->crearCurso('ASUC00947', $anioMalla, $tipo, 7, 'Construcción de Software', 4, 2, 5, 'Obligatorio', 
                                'Construcción de Software se centra en las técnicas y herramientas para la
                                construcción de sistemas de software de alta calidad.',  false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00947-' . $anioMalla . '.pdf'),
            $this->crearCurso('ASUC00754', $anioMalla, $tipo, 7, 'Redes de Computadores', 2, 4, 4, 'Obligatorio', 
                                'Redes de Computadores cubre los principios y tecnologías de las redes de 
                                computadoras.',  false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00754-' . $anioMalla . '.pdf'),
            $this->crearCurso('ASUC01141', $anioMalla, $tipo, 7, 'Arquitectura Empresarial', 4, 2, 5, 'Obligatorio', 
                            'Arquitectura Empresarial aborda los principios y prácticas para el diseño de arquitecturas 
                            empresariales eficientes.',  false,
                            'ConvalidacionesUC/public/SilabosPDF/Local-ASUC01141-' . $anioMalla . '.pdf'),

            // Periodo 8
            $this->crearCurso('ASUC01203', $anioMalla, $tipo, 8, 'Conversation Class', 2, 2, 3, 'Obligatorio',
                                'Conversation Class proporciona un espacio para practicar y mejorar las habilidades 
                                de comunicación oral en inglés.',  false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC01203-' . $anioMalla . '.pdf'),
            $this->crearCurso('ASUC01006', $anioMalla, $tipo, 8, 'Pruebas y Calidad de Software', 2, 4, 4, 'Obligatorio', 
                                'Pruebas y Calidad de Software aborda las técnicas y metodologías para garantizar la 
                                calidad del software.',  false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC01006-' . $anioMalla . '.pdf'),
            $this->crearCurso('ASUC00123', $anioMalla, $tipo, 8, 'Conmutación y Enrutamiento', 2, 4, 4, 'Obligatorio', 
                                'Conmutación y Enrutamiento cubre los principios y tecnologías de conmutación y 
                                enrutamiento de redes.',  false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00123-' . $anioMalla . '.pdf'),
            $this->crearCurso('ASUC01235', $anioMalla, $tipo, 8, 'Dirección de Proyectos', 2, 4, 4, 'Obligatorio', 
                                'Dirección de Proyectos se centra en las técnicas y herramientas para la gestión eficiente
                                de proyectos de tecnología de la información.',  false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC01235-' . $anioMalla . '.pdf'),

            // Periodo 9
            $this->crearCurso('ASUC00413', $anioMalla, $tipo, 9, 'Gestión de Servicios TI', 2, 2, 3, 'Obligatorio', 
                                'Este curso introduce los principios de gestión de servicios de tecnologías de la información, 
                                abordando temas como ITIL y COBIT.',  false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00413-' . $anioMalla . '.pdf'),

            $this->crearCurso('ASUC00469', $anioMalla, $tipo, 9, 'Ingeniería Web', 2, 4, 4, 'Obligatorio', 
                                'Este curso explora los fundamentos y técnicas avanzadas de desarrollo web, incluyendo HTML,
                                CSS, JavaScript y frameworks modernos.',  false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00469-' . $anioMalla . '.pdf'),

            $this->crearCurso('ASUC01584', $anioMalla, $tipo, 9, 'Taller de Proyectos 1 - Ingeniería de Sistemas e Informática', 2, 4, 4, 'Obligatorio', 
                                'Este taller brinda a los estudiantes la oportunidad de aplicar sus conocimientos en
                                proyectos prácticos de ingeniería de sistemas e informática.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC01584-' . $anioMalla . '.pdf'),

            $this->crearCurso('ASUC01228', $anioMalla, $tipo, 9, 'Desarrollo de Aplicaciones Móviles', 2, 4, 4, 'Obligatorio', 
                                'Este curso se centra en el desarrollo de aplicaciones móviles para plataformas 
                                iOS y Android, cubriendo aspectos de diseño y programación.',  false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC01228-' . $anioMalla . '.pdf'),

            $this->crearCurso('ASUC01702', $anioMalla, $tipo, 9, 'Procesos de Software', 2, 2, 3, 'Electivo', 
                                'Este curso aborda los diferentes procesos utilizados en el desarrollo de software,
                                 incluyendo metodologías tradicionales y ágiles.',  false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC01702-' . $anioMalla . '.pdf'),
            
            $this->crearCurso('ASUC00304', $anioMalla, $tipo, 9, 'Escalamiento de Redes de Computadoras', 2, 2, 3, 'Electivo', 
                                'En este curso, los estudiantes exploran técnicas y estrategias para escalar 
                                redes de computadoras, abordando temas como balanceo de carga y redundancia.',  false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00304-' . $anioMalla . '.pdf'),
            
            $this->crearCurso('ASUC00802', $anioMalla, $tipo, 9, 'Sistemas de Información Integrados', 2, 2, 3, 'Electivo', 
                                'Este curso se centra en la integración de sistemas de información en entornos 
                                empresariales, cubriendo aspectos de interoperabilidad y arquitecturas SOA.',  false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00802-' . $anioMalla . '.pdf'),
            
            $this->crearCurso('ASUC00587', $anioMalla, $tipo, 9, 'Metodologías Ágiles de Desarrollo de Software', 2, 2, 3, 'Electivo', 
                                'En este curso, los estudiantes aprenden sobre las metodologías ágiles de 
                                desarrollo de software, como Scrum y Kanban, y su aplicación en proyectos reales.',  false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00587-' . $anioMalla . '.pdf'),
            
            $this->crearCurso('ASUC00756', $anioMalla, $tipo, 9, 'Redes WAN', 2, 2, 3, 'Electivo', 
                                'Este curso se enfoca en las redes WAN (Wide Area Network), explorando tecnologías
                                 y protocolos utilizados en la interconexión de redes a gran escala.',  false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00756-' . $anioMalla . '.pdf'),
            
            $this->crearCurso('ASUC00769', $anioMalla, $tipo, 9, 'Seguridad de la información corporativa', 2, 2, 3, 'Electivo',
                                'En este curso, los estudiantes estudian las prácticas y tecnologías utilizadas 
                                para garantizar la seguridad de la información en entornos corporativos.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00769-' . $anioMalla . '.pdf'),
            
            $this->crearCurso('ASUC00614', $anioMalla, $tipo, 9, 'Negocios Electrónicos', 2, 2, 3, 'Electivo', 
                                'Este curso examina los aspectos clave de los negocios electrónicos, 
                                incluyendo comercio electrónico, marketing digital y modelos de negocio en línea.',  false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00614-' . $anioMalla . '.pdf'),
            
            $this->crearCurso('ASUC00662', $anioMalla, $tipo, 9, 'Planeamiento Estratégico de los SI/TI', 2, 2, 3, 'Electivo',
                                'En este curso, los estudiantes aprenden a alinear la estrategia de los 
                                sistemas de información y tecnologías de la información con los objetivos 
                                empresariales.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00662-' . $anioMalla . '.pdf'),
            
            $this->crearCurso('ASUC00210', $anioMalla, $tipo, 9, 'Desarrollo de Videojuegos', 2, 2, 3, 'Electivo',
                                'Este curso explora los fundamentos del desarrollo de videojuegos, 
                                incluyendo diseño de juegos, programación y aspectos creativos.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00210-' . $anioMalla . '.pdf'),
            
            $this->crearCurso('ASUC00381', $anioMalla, $tipo, 9, 'Gerencia de la Seguridad de Información', 2, 2, 3, 'Electivo',
                                'En este curso, los estudiantes estudian las estrategias y prácticas de 
                                gerencia de la seguridad de la información, abordando aspectos de riesgo, 
                                cumplimiento y continuidad del negocio.', false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00381-' . $anioMalla . '.pdf'),

            // Periodo 10
            $this->crearCurso('ASUC00490', $anioMalla, $tipo, 10, 'Inteligencia de Negocios', 2, 2, 3, 'Obligatorio', 
                                'Este curso introduce a los estudiantes en el análisis de datos para la 
                                toma de decisiones empresariales, utilizando herramientas y técnicas de 
                                inteligencia de negocios.',  false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00490-' . $anioMalla . '.pdf'),
            $this->crearCurso('ASUC00097', $anioMalla, $tipo, 10, 'Cloud Computing', 2, 2, 3, 'Obligatorio',
                                'Este curso explora los fundamentos y aplicaciones del cloud computing, 
                                incluyendo servicios en la nube, virtualización y seguridad.',  false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00097-' . $anioMalla . '.pdf'),
            $this->crearCurso('ASUC00941', $anioMalla, $tipo, 10, 'Auditoría de Sistemas', 2, 4, 4, 'Obligatorio', 
                                'Este curso se enfoca en los principios y prácticas de auditoría de sistemas, 
                                abordando la evaluación de controles y la detección de riesgos.',  false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC00941-' . $anioMalla . '.pdf'),
            $this->crearCurso('ASUC01585', $anioMalla, $tipo, 10, 'Taller de Proyectos 2 - Ingeniería de Sistemas e Informática',
                                2, 4, 4, 'Obligatorio', 
                                'En este taller, los estudiantes continúan desarrollando proyectos prácticos en el
                                área de ingeniería de sistemas e informática, aplicando metodologías ágiles y 
                                herramientas de gestión de proyectos.',  false,
                                'ConvalidacionesUC/public/SilabosPDF/Local-ASUC01585-' . $anioMalla . '.pdf'),
        ];
    }
    
    private function getCursosLocales2024($anioMalla, $tipo): array
    {
        return [
            //Periodo 1
            $this->crearCurso('E10300011', $anioMalla, $tipo, 1, 'Introducción a la Ingeniería de Sistemas e Informática', 2, 2, 3, 'Obligatorio', 
            'Este curso ofrece una visión general de la Ingeniería de Sistemas e Informática, explorando sus principios, 
            áreas de aplicación y tendencias actuales.',  false,
            'ConvalidacionesUC/public/SilabosPDF/Local-E10300011-' . $anioMalla . '.pdf'),

            $this->crearCurso('F00050137', $anioMalla, $tipo, 1, 'Matemática Discreta', 2, 2, 3, 'Obligatorio', 
            'Este curso cubre conceptos fundamentales de matemática discreta, incluyendo lógica, teoría de 
            conjuntos, grafos y combinatoria.',  false,
            'ConvalidacionesUC/public/SilabosPDF/Local-F00050137-' . $anioMalla . '.pdf'),

            //Periodo 2
            $this->crearCurso('F00050092', $anioMalla, $tipo, 2, 'Fundamentos del Cálculo', 2, 2, 3, 'Obligatorio', 
            'Fundamentos del Cálculo introduce los conceptos básicos de cálculo diferencial e integral 
            y sus aplicaciones.',  false,
            'ConvalidacionesUC/public/SilabosPDF/Local-F00050092-' . $anioMalla . '.pdf'),

            $this->crearCurso('F00050003', $anioMalla, $tipo, 2, 'Álgebra Lineal y Geometría Analítica', 2, 2, 3, 'Obligatorio', 
            'Este curso aborda los conceptos esenciales de álgebra lineal y geometría analítica, incluyendo matrices,
            vectores y espacios vectoriales.',  false,
            'ConvalidacionesUC/public/SilabosPDF/Local-F00050003-' . $anioMalla . '.pdf'),

            $this->crearCurso('E10300013', $anioMalla, $tipo, 2, 'Programación Orientada a Objetos', 2, 2, 3, 'Obligatorio', 
            'El curso de Programación Orientada a Objetos cubre los principios de la programación orientada a 
            objetos, incluyendo clases, objetos, herencia y polimorfismo.',  false,
            'ConvalidacionesUC/public/SilabosPDF/Local-E10300013-' . $anioMalla . '.pdf'),

            $this->crearCurso('F00050083', $anioMalla, $tipo, 2, 'Base de Datos 1', 2, 2, 3, 'Obligatorio', 
            'Base de Datos 1 introduce los conceptos fundamentales de las bases de datos, incluyendo 
            diseño, modelado y lenguajes de consulta.',  false,
            'ConvalidacionesUC/public/SilabosPDF/Local-F00050083-' . $anioMalla . '.pdf'),

            $this->crearCurso('G00000026', $anioMalla, $tipo, 2, 'Discapacidad e Inclusión Social', 2, 2, 3, 'Obligatorio', 
            'Este curso explora la importancia de la inclusión social de las personas con discapacidad
            y las estrategias para promoverla.',  false,
            'ConvalidacionesUC/public/SilabosPDF/Local-G00000026-' . $anioMalla . '.pdf'),

            //Periodo 3
            $this->crearCurso('F00050091', $anioMalla, $tipo, 3, 'Cálculo Diferencial', 2, 2, 3, 'Obligatorio', 
            'Cálculo Diferencial abarca los conceptos y técnicas del cálculo diferencial y sus aplicaciones en
            la resolución de problemas.',  false,
            'ConvalidacionesUC/public/SilabosPDF/Local-F00050091-' . $anioMalla . '.pdf'),

            $this->crearCurso('F00050096', $anioMalla, $tipo, 3, 'Física 1', 2, 2, 3, 'Obligatorio', 
            'Física 1 introduce los principios básicos de la física, incluyendo mecánica, ondas y termodinámica.',  false,
            'ConvalidacionesUC/public/SilabosPDF/Local-F00050096-' . $anioMalla . '.pdf'),

            $this->crearCurso('E10300015', $anioMalla, $tipo, 3, 'Estructura de Datos', 2, 2, 3, 'Obligatorio', 
            'Estructura de Datos cubre los fundamentos de las estructuras de datos y su implementación en la programación.',  false,
            'ConvalidacionesUC/public/SilabosPDF/Local-E10300015-' . $anioMalla . '.pdf'),

            $this->crearCurso('G00000007', $anioMalla, $tipo, 3, 'Estadística y Probabilidades', 2, 2, 3, 'Obligatorio', 
            'Este curso ofrece una introducción a los conceptos básicos de la estadística y la teoría de probabilidades.',  false,
            'ConvalidacionesUC/public/SilabosPDF/Local-G00000007-' . $anioMalla . '.pdf'),

            $this->crearCurso('E10300014', $anioMalla, $tipo, 3, 'Diseño Web', 2, 2, 3, 'Obligatorio', 
            'Diseño Web introduce los principios del diseño y desarrollo de sitios web, incluyendo HTML, CSS y JavaScript.',  false,
            'ConvalidacionesUC/public/SilabosPDF/Local-E10300014-' . $anioMalla . '.pdf'),

            //Periodo 4
            $this->crearCurso('F00050100', $anioMalla, $tipo, 4, 'Cálculo Integral', 2, 2, 3, 'Obligatorio', 
            'Cálculo Integral se centra en las técnicas de integración y sus aplicaciones en diferentes 
            campos de la ingeniería.',  false,
            'ConvalidacionesUC/public/SilabosPDF/Local-F00050100-' . $anioMalla . '.pdf'),

            $this->crearCurso('G00000014', $anioMalla, $tipo, 4, 'Medio Ambiente y Desarrollo Sostenible', 2, 2, 3, 'Obligatorio', 
            'Este curso aborda la importancia del desarrollo sostenible y las estrategias para la protección del 
            medio ambiente.',  false,
            'ConvalidacionesUC/public/SilabosPDF/Local-G00000014-' . $anioMalla . '.pdf'),

            $this->crearCurso('E10300016', $anioMalla, $tipo, 4, 'Analisis y Diseño de Software', 2, 2, 3, 'Obligatorio', 
            'El curso cubre los principios y prácticas del análisis y diseño de software, incluyendo
            metodologías y herramientas.',  false,
            'ConvalidacionesUC/public/SilabosPDF/Local-E10300016-' . $anioMalla . '.pdf'),

            //Periodo 5
            $this->crearCurso('F00050107', $anioMalla, $tipo, 5, 'Estadística para Ingeniería', 2, 2, 3, 'Obligatorio', 
            'Estadística para Ingeniería aplica los conceptos estadísticos en la solución de problemas de ingeniería.', false, 
            'ConvalidacionesUC/public/SilabosPDF/Local-F00050107-' . $anioMalla . '.pdf'),

            $this->crearCurso('E10300020', $anioMalla, $tipo, 5, 'Arquitectura del Computador', 2, 2, 3, 'Obligatorio', 
            'Arquitectura del Computador estudia los componentes y la organización de los sistemas informáticos.',  false,
            'ConvalidacionesUC/public/SilabosPDF/Local-E10300020-' . $anioMalla . '.pdf'),

            $this->crearCurso('E10300019', $anioMalla, $tipo, 5, 'Base de Datos 2', 2, 2, 3, 'Obligatorio', 
            'Base de Datos 2 profundiza en el diseño avanzado, implementación y gestión de bases de datos.',  false,
            'ConvalidacionesUC/public/SilabosPDF/Local-E10300019-' . $anioMalla . '.pdf'),

            $this->crearCurso('G00000019', $anioMalla, $tipo, 5, 'Laboratorio de Liderazgo e Innovación Avanzado', 2, 2, 3, 'Obligatorio', 
            'Este laboratorio ofrece experiencias prácticas para el desarrollo de habilidades avanzadas de 
            liderazgo e innovación.',  false,
            'ConvalidacionesUC/public/SilabosPDF/Local-G00000019-' . $anioMalla . '.pdf'),

            //Periodo 6
            $this->crearCurso('E10300022', $anioMalla, $tipo, 6, 'Sistemas Operativos', 2, 2, 3, 'Obligatorio', 
            'Sistemas Operativos cubre los principios y funcionamiento de los sistemas operativos modernos.',  false,
            'ConvalidacionesUC/public/SilabosPDF/Local-E10300022-' . $anioMalla . '.pdf'),

            $this->crearCurso('F00050112', $anioMalla, $tipo, 6, 'Investigación Operativa 1', 2, 2, 3, 'Obligatorio', 
            'Investigación Operativa 1 introduce los métodos y modelos matemáticos para la optimización de
            sistemas complejos.',  false,
            'ConvalidacionesUC/public/SilabosPDF/Local-F00050112-' . $anioMalla . '.pdf'),

            $this->crearCurso('E10300021', $anioMalla, $tipo, 6, 'Desarrollo de Videojuegos', 2, 2, 3, 'Obligatorio', 
            'Este curso se centra en los principios y técnicas para el diseño y desarrollo de videojuegos.',  false,
            'ConvalidacionesUC/public/SilabosPDF/Local-E10300021-' . $anioMalla . '.pdf'),

            //Periodo 7
            $this->crearCurso('E10300026', $anioMalla, $tipo, 7, 'Construcción y Pruebas de Software', 2, 2, 3, 'Obligatorio', 
            'Construcción y Pruebas de Software aborda las metodologías y herramientas para la construcción 
            y prueba de software de calidad.',  false,
            'ConvalidacionesUC/public/SilabosPDF/Local-E10300026-' . $anioMalla . '.pdf'),

            $this->crearCurso('F00050134', $anioMalla, $tipo, 7, 'Redes de Computadoras', 2, 2, 3, 'Obligatorio', 
            'Redes de Computadoras cubre los principios y tecnologías de las redes de computadoras, 
            incluyendo protocolos y arquitectura de redes.',  false,
            'ConvalidacionesUC/public/SilabosPDF/Local-F00050134-' . $anioMalla . '.pdf'),

            //Periodo 8
            $this->crearCurso('F00050135', $anioMalla, $tipo, 8, 'Conmutación y Enrutamiento', 2, 2, 3, 'Obligatorio', 
            'Conmutación y Enrutamiento se enfoca en los principios y prácticas de la conmutación y 
            enrutamiento en redes de datos.',  false,
            'ConvalidacionesUC/public/SilabosPDF/Local-F00050135-' . $anioMalla . '.pdf'),

            $this->crearCurso('E10300028', $anioMalla, $tipo, 8, 'Metodologías Ágiles para el Desarrollo de Software', 2, 2, 3, 'Obligatorio', 
            'Este curso introduce las metodologías ágiles y sus aplicaciones en el desarrollo de software.', false,
            'ConvalidacionesUC/public/SilabosPDF/Local-E10300028-' . $anioMalla . '.pdf'),

            $this->crearCurso('F00050136', $anioMalla, $tipo, 8, 'Desarrollo de Aplicaciones Móviles', 2, 2, 3, 'Obligatorio', 
            'Desarrollo de Aplicaciones Móviles cubre los principios y prácticas del desarrollo de 
            aplicaciones móviles para diversas plataformas.',  false,
            'ConvalidacionesUC/public/SilabosPDF/Local-F00050136-' . $anioMalla . '.pdf'),

            //Periodo 9
            $this->crearCurso('E10300033', $anioMalla, $tipo, 9, 'Aplicaciones Cloud', 2, 2, 3, 'Obligatorio', 
            'Aplicaciones Cloud se centra en los conceptos y tecnologías para el desarrollo y despliegue de 
            aplicaciones en la nube.',  false,
            'ConvalidacionesUC/public/SilabosPDF/Local-E10300033-' . $anioMalla . '.pdf'),

            $this->crearCurso('E10300030', $anioMalla, $tipo, 9, 'Taller de Proyectos 1 en Ingeniería de Sistemas e Informática', 2, 2, 3, 'Obligatorio', 
            'Este taller proporciona una experiencia práctica en el desarrollo de proyectos de Ingeniería 
            de Sistemas e Informática.',  false,
            'ConvalidacionesUC/public/SilabosPDF/Local-E10300030-' . $anioMalla . '.pdf'),

            $this->crearCurso('E10300032', $anioMalla, $tipo, 9, 'Seguridad de la Información', 2, 2, 3, 'Obligatorio', 
            'Seguridad de la Información aborda los principios y prácticas para proteger la información
            y los sistemas informáticos.',  false,
            'ConvalidacionesUC/public/SilabosPDF/Local-E10300032-' . $anioMalla . '.pdf'),

            //Periodo 10
            $this->crearCurso('E10300042', $anioMalla, $tipo, 10, 'Planificación y Gestión de Tecnologías de la Información', 2, 2, 3, 'Obligatorio', 
            'Este curso cubre la planificación estratégica y la gestión de tecnologías de la
            información en organizaciones.',  false,
            'ConvalidacionesUC/public/SilabosPDF/Local-E10300042-' . $anioMalla . '.pdf'),

            $this->crearCurso('E10300039', $anioMalla, $tipo, 10, 'Taller de Proyectos 2 en Ingeniería de Sistemas e Informática', 2, 2, 3, 'Obligatorio', 
            'Este taller avanzado proporciona experiencia práctica en el desarrollo de proyectos complejos de
            Ingeniería de Sistemas e Informática.',  false,
            'ConvalidacionesUC/public/SilabosPDF/Local-E10300039-' . $anioMalla . '.pdf'),
        ];
    }
    
    private function crearCurso($id, $anioMalla, $tipo, $periodo=null, $nombre, $horasTeoricas = 0, 
                                $horasPracticas = 0, $creditos = 0, $caracter=null, $sumillaSilabo,
                                $estado = null, $rutaSilaboPDF=null): array
    {
        return [
            'idCurso'=> $id,
            'anioMalla_Curso' => $anioMalla,
            'tipoCurso' => $tipo,
            'periodoCurso' => $periodo,
            'nombreCurso' => $nombre ,
            'horasTeoricasCurso' => $horasTeoricas,
            'horasPracticasCurso' => $horasPracticas,
            'creditosCurso' => $creditos,
            'caracterCurso' => $caracter,
            'sumillaSilabo_Curso' => $sumillaSilabo,
            'estadoCurso' => $estado,
            'rutaSilaboPDF_Curso' => $rutaSilaboPDF,
        ];
    }
}
