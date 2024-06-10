@extends('layouts.layoutApp')

@section('title', 'Inicio de sesión')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/loginStyles.css') }}">
@endpush

@section('content')
<div class="main_container">
    <div class="left_container">
        <div class="contenedor-logo">
            <img src="{{ url('images/logo_UC.png') }}" alt="logo_UC">
        </div>

        <div class="title_container">    
            <h1>CONVALIDACIONES EAP INGENIERÍA DE SISTEMAS E INFORMÁTICA</h1>
        </div>        
        
        <div>
            <form action="{{ route('loginPost') }}" method="POST">
                @csrf
                <div class="title2_container">
                    <h4>Ingrese sus credenciales de inicio de sesión</h4>
                </div>
                
                <div class="subtitle_container">    
                    <h3>Correo electrónico</h3>
                </div>        
    
                <input class="credential-box-input" type="email" id="email" name="email" required placeholder="Ingrese email">
                
                <div class="subtitle_container">    
                    <h3>Contraseña</h3>
                </div>

                <input class="credential-box-input" type="password" id="password" name="password" required placeholder="Ingrese password">

                <div class="remember_check">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Mantener sesión iniciada</label>
                </div>
                <input type="submit" value="Acceder" class="login_button">
                <br>
                
                @if ($errors->has('email'))
                <div class="alert alert-danger">
                    {{ $errors->first('email') }}
                </div>
                @endif
            </form>
        </div>
    </div>
    
    <div class="right_container"></div>
</div>
@endsection
