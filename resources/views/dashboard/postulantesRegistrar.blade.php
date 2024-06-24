@extends('layouts.layoutDashboard')

@section('title', 'Registrar postulante')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/registrarPostulante.css') }}">
@endpush

@section('main-content')
    <div class="RegistrarPostulanteContainer">
        <div class="center">
            <h1 class="title">Registrar Postulante</h1>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form id="register_form" method="POST" action="{{ route('postulantesRegistrar.store') }}">
                @csrf
                <label for="idPostulante">DNI:</label>
                <input type="text" id="idPostulante" name="idPostulante" required>
                @error('dni')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                
                <label for="nombrePostulante">Nombre Completo:</label>
                <input type="text" id="nombrePostulante" name="nombrePostulante" required>
                @error('nombrePostulante')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                
                <label for="carreraProcedenciaPostulante">Carrera de procedencia:</label>
                <input type="text" id="carreraProcedenciaPostulante" name="carreraProcedenciaPostulante" required>
                @error('carreraProcedenciaPostulante')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                
                <label for="institucionProcedenciaPostulante">Institución de procedencia:</label>
                <input type="text" id="institucionProcedenciaPostulante" name="institucionProcedenciaPostulante" required>
                @error('institucionProcedenciaPostulante')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                
                <div class="form-buttons">

                    <button type="submit" class="register-btn">Registrar</button>
                    <button type="reset" class="clear-btn">Limpiar</button>
                </div>
            </form>
        </div>
    </div>
    
   
@endsection
