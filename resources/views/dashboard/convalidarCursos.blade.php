@extends('layouts.layoutDashboard')

@section('title', 'Convalidar cursos')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/convalidarCursosStyle.css') }}">
@endpush

@section('main-content')
    <div class="convalidarcursosContainer">
        <div class="row">
            <div class="col">
              <h4>Postulante</h4>
              <div class="input-select" id="postulanteSelect">
                <input type="text" id="postulanteInput" placeholder="Ingresar nombre" oninput="filterOptions()" onclick="toggleOptions('postulanteOptions')">
                <ul class="select-items" id="postulanteOptions" style="display: none;">
                    @foreach ($postulantes as $postulante)
                      <li onclick="selectOption('{{ $postulante->idPostulante }} - {{ $postulante->nombrePostulante }}',
                                                '{{ $postulante->institucionProcedenciaPostulante }}',
                                                '{{ $postulante->carreraProcedenciaPostulante}}')">
                        {{ $postulante->idPostulante }} - {{ $postulante->nombrePostulante }}
                      </li>
                    @endforeach
                </ul>
            </div>
            </div>
            <div class="col">
              <h4>Institución</h4>
              <label class="bordered_label" id="institucionLabel">No se encontró institución</label>
            </div>
            <div class="col">
              <h4>Carrera Procedencia</h4>
              <label class="bordered_label" id="carreraProcedenciaLabel">No se encontró carrera</label>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <h4>Malla solicitada</h4>
              <select class="selectable">
                <option value="" selected disabled>Seleccionar malla</option>
                <option value="2015">2015</option>
                <option value="2015">2018</option>
                <option value="2015">2024</option>
              </select>
            </div>
            <div class="col">
              <h4>Carrera Destino</h4>
              <select class="selectable">
                <option value="" selected disabled>Seleccionar carrera</option>
                @foreach ($carrerasaLocales as $carreraLocal)
                  <option value="{{ $carreraLocal->idCarreraLocal }}">{{ $carreraLocal->idCarreraLocal }} - {{ $carreraLocal->nombreCarreraLocal }}</option>
                @endforeach
              </select>
            </div>
            
            <div class="col">
              <form method="GET" action="{{ route('postulantesRegistrar.create') }}">
                <button class="btnNuevoPostulante">
                  <span class="material-symbols-outlined">add</span>
                  Registrar nuevo postulante
                </button>
              </form>
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
    
    <script src={{ asset('js/convalidarCursosScrip.js') }}> </script>
@endsection
