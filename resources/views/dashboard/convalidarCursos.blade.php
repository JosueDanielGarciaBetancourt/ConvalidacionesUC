@extends('layouts.layoutDashboard')

@section('title', 'Ventas Intermediadas')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/convalidarCursosSty.css') }}">
@endpush

@section('main-content')
    <div class="convalidarcursosContainer">
        <div class="row">
            <div class="col">
              <h4>Postulante</h4>
              <div class="input-select" id="postulanteSelect">
                  <input type="text-autocomplete" placeholder="Ingresar nombre" onclick="toggleOptions('postulanteOptions')">
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
              <label class="bordered_label">Ingenería Eléctrica</label>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <h4>Malla solicitada</h4>
              <select class="selectable">
                <option value="2015">2015</option>
                <option value="2015">2018</option>
                <option value="2015">2024</option>
              </select>
            </div>
            <div class="col">
              <h4>Carrera Destino</h4>
              <select class="selectable">
                <option value="103">103 - Ing. Sistemas e Informática</option>
                <option value="103">105 - Ing. Civil</option>
              </select>
            </div>

            <div class="col">
              <button class="btnNuevoPostulante">
                <span class="material-symbols-outlined">add</span>
                Registrar nuevo postulante
              </button>
            </div>
          </div>
        </div>

        <div class="row">
          <table>
            <thead>
                <tr>
                    <th>CÓDIGO</th>
                    <th>ASIGNATURAS</th>
                    <th>H.T.</th>
                    <th>H.P.</th>
                    <th>CRÉDITOS</th>
                    <th>TIPO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>CS101</td>
                    <td>Introducción a la Computación</td>
                    <td>4</td>
                    <td>2</td>
                    <td>5</td>
                    <td>Obligatoria</td>
                </tr>
                <tr>
                    <td>CS102</td>
                    <td>Estructuras de Datos</td>
                    <td>4</td>
                    <td>2</td>
                    <td>5</td>
                    <td>Obligatoria</td>
                </tr>
            </tbody>
        </table>
        
        </div>
    </div>
    
    <script src={{ asset('js/convalidarCursosScript.js') }}> </script>
@endsection
