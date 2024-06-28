@extends('layouts.layoutApp')

@section('title', 'Inicio de sesión')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/loginStyle.css') }}">
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

            <div class="title2_container">
                <h4>Ingrese sus credenciales de inicio de sesión</h4>
            </div>
            
            <div class="subtitle_container">    
                <h3>Correo electrónico</h3>
            </div>     
                
            @if (session('status'))
                <div class="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('loginPost') }}">
                @csrf
                <!-- Email Address -->
                <div class="form-group">
                    <div class="subtitle_container">    
                        <h3>Correo electrónico</h3>
                    </div>   
                    <input id="email" class="credential-box-input" type="email" name="email" 
                            value="{{ old('email') }}" required placeholder="Ingrese email" 
                            required autofocus autocomplete="username">
                    @error('email')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Password -->
                <div class="form-group">
                    <div class="subtitle_container">    
                        <h3>Contraseña</h3>
                    </div>   
                    <input id="password" class="credential-box-input" type="password" 
                            name="password" required placeholder="Ingrese contraseña" 
                            required autocomplete="current-password">
                    @error('password')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="remember_check">
                    <label>
                        <input type="checkbox" class="form-check-input" name="remember" id="remember_me">
                        <span>Mantener sesión iniciada</span>
                    </label>
                </div>

                <div class="recover-password">
                    @if (Route::has('password.request'))
                        <a class="recover-password-link" href="{{ route('password.request') }}">
                            ¿Olvidaste tu contraseña?
                        </a>
                    @endif
                </div>

                <div class="button_container">
                    <button type="submit" class="login_button">Acceder</button>
                </div>
            </form>
        </div>

        <div class="right_container"></div>
    </div>
@endsection
