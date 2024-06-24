@extends('layouts.layoutDashboard')

@section('title', 'Ventas Intermediadas')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/convalidarCursosSty.css') }}">
    <style>
        .header {
            position: sticky;
            top: 0;
            background: white;
        }

        .convalidarcursosContainer {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        .col {
            flex: 1;
            min-width: 200px;
            padding: 10px;
        }

        .col input,
        .col textarea,
        .col select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        @media (max-width: 768px) {
            .row>.col.full-width {
                flex: 0 0 100%;
            }
        }

        #cursosContainer .row {
            margin-bottom: 10px;
            width: 700px;
            margin: auto;
        }

        .generar {
            background: rgba(111, 65, 116, 0.658);
            width: 150px;
            height: 40px;
            border-radius: 5px;
            box-shadow: 0 1px 5px black;
            display: block;
            margin: auto;
            margin-top: 10px;
        }

        .generar:enabled {
            background-color: rgba(111, 65, 116, 0.658);
        }

        .convalidacion-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .convalidacion-table th,
        .convalidacion-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
    </style>
@endpush

@section('main-content')
    <div class="convalidarcursosContainer">
        <div class="row">
            <div class="col">
                <h4>Postulante</h4>
                <div class="input-select" id="postulanteSelect">
                    <input type="text" placeholder="Ingresar nombre" onclick="toggleOptions('postulanteOptions')">
                    <ul class="select-items" id="postulanteOptions">
                        <li onclick="selectOption('77043114 - García Betancourt Josué Daniel')">77043114 - García Betancourt Josué Daniel</li>
                        <li onclick="selectOption('12345678 - Perez Rivera Mario')">12345678 - Perez Rivera Mario</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <h4>Institución</h4>
                <label class="bordered_label">Universidad Nacional del Centro del Perú</label>
            </div>
            <div class="col">
                <h4>Carrera Procedencia</h4>
                <label class="bordered_label">Ingeniería Eléctrica</label>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h4>Malla solicitada</h4>
                <select class="selectable">
                    <option value="2015">2015</option>
                    <option value="2018">2018</option>
                    <option value="2024">2024</option>
                </select>
            </div>
            <div class="col">
                <h4>Carrera Destino</h4>
                <select class="selectable">
                    <option value="103">103 - Ing. Sistemas e Informática</option>
                    <option value="105">105 - Ing. Civil</option>
                </select>
            </div>
            <div class="col">
                <button class="btnNuevoPostulante">
                    <span class="material-symbols-outlined">add</span>
                    Registrar nuevo postulante
                </button>
            </div>
        </div>

        <div class="row">
            <div class="col full-width">
                <h4>Cantidad de Cursos a Convalidar</h4>
                <input type="number" id="numCursos" placeholder="Ingrese número de cursos" min="1">
                <button onclick="generarCursos()" class="generar">Generar Cursos</button>
            </div>
        </div>

        <div class="row" id="cursosContainer">
            <!-- Aquí se generarán los cursos dinámicamente -->
        </div>

        <div class="row" id="submitButtonContainer">
            <div class="col full-width">
                <button id="submitButton" onclick="convalidar()" class="generar" disabled>CONVALIDAR</button>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/convalidarCursosScript.js') }}"></script>
    <script>
        // Lista de cursos locales (Universidad Continental)
        var cursosLocales = [
            'Matemáticas Básicas',
            'Programación Avanzada',
            'Física Aplicada',
            'Ingeniería de Software',
            'Bases de Datos'
        ];

        function generarCursos() {
            var numCursos = document.getElementById('numCursos').value;
            var cursosContainer = document.getElementById('cursosContainer');
            cursosContainer.innerHTML = ''; // Limpiar contenido anterior

            for (var i = 1; i <= numCursos; i++) {
                var cursoRow = document.createElement('div');
                cursoRow.classList.add('row');
                cursoRow.innerHTML = `
                    <div class="col full-width">
                        <h4>Curso Foráneo ${i}</h4>
                        <input type="text" placeholder="Nombre del curso" name="curso${i}_nombre" class="curso-nombre" oninput="checkInputs()">
                    </div>
                    <div class="col full-width">
                        <br>
                        <textarea placeholder="Sumilla del curso" name="curso${i}_sumilla" class="curso-sumilla" oninput="checkInputs()"></textarea>
                    </div>
                `;
                cursosContainer.appendChild(cursoRow);
            }

            // Habilitar o deshabilitar botón de convalidar
            var submitButton = document.getElementById('submitButton');
            submitButton.disabled = true; // Deshabilitar por defecto
        }

        function checkInputs() {
            var allInputs = document.querySelectorAll('#cursosContainer input.curso-nombre, #cursosContainer textarea.curso-sumilla');
            var submitButton = document.getElementById('submitButton');

            var allFilled = true;
            allInputs.forEach(function(input) {
                if (input.value.trim() === '') {
                    allFilled = false;
                }
            });

            submitButton.disabled = !allFilled;
        }

        function convalidar() {
            var cursosContainer = document.getElementById('cursosContainer');
            var cursosForaneos = cursosContainer.querySelectorAll('.curso-nombre');
            var cursosSumilla = cursosContainer.querySelectorAll('.curso-sumilla');

            var tablaConvalidacion = document.createElement('table');
            tablaConvalidacion.classList.add('convalidacion-table');

            // Encabezados de la tabla
            var headerRow = tablaConvalidacion.insertRow();
            var th1 = document.createElement('th');
            th1.textContent = 'Curso Local';
            var th2 = document.createElement('th');
            th2.textContent = 'Curso Foráneo';
            var th3 = document.createElement('th');
            th3.textContent = 'Convalidado';
            headerRow.appendChild(th1);
            headerRow.appendChild(th2);
            headerRow.appendChild(th3);

            // Generar filas de la tabla con datos ingresados
            for (var i = 0; i < cursosForaneos.length; i++) {
                var convalidaRow = tablaConvalidacion.insertRow();
                var cursoLocal = cursosLocales[Math.floor(Math.random() * cursosLocales.length)]; // Curso local aleatorio
                var cursoForaneo = cursosForaneos[i].value;
                var convalida = Math.random() < 0.5 ? 'Sí' : 'No'; // Respuesta aleatoria

                var cell1 = convalidaRow.insertCell();
                cell1.textContent = cursoLocal;

                var cell2 = convalidaRow.insertCell();
                cell2.textContent = cursoForaneo;

                var cell3 = convalidaRow.insertCell();
                cell3.textContent = convalida;
            }

            // Limpiar contenido principal y agregar tabla de convalidación
            var mainContent = document.querySelector('.convalidarcursosContainer');
            mainContent.innerHTML = '';
            mainContent.appendChild(tablaConvalidacion);

            // Agregar botón de imprimir
            var imprimirBtn = document.createElement('button');
            imprimirBtn.textContent = 'Imprimir';
            imprimirBtn.classList.add('generar');
            imprimirBtn.addEventListener('click', imprimir);

            var imprimirDiv = document.createElement('div');
            imprimirDiv.classList.add('row');
            imprimirDiv.appendChild(imprimirBtn);

            mainContent.appendChild(imprimirDiv);
        }

        function imprimir() {
            // Lógica de impresión
            window.print();
        }
    </script>
@endsection