@extends('layouts.layoutApp')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/dashboardStyles.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    @stack('styles')
@endpush

@section('content')
    <div class="dashboard-container">
        <!-- aside section-->
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="{{ url('images/logo_UC.png') }}" alt="logo_UC">
                </div>
            </div>

            <div class="sidebar">
                <a href="{{ route('convalidarCursos') }}" class="{{ Request::routeIs('convalidarCursos') ? 'active' : '' }}">
                    <span class="material-symbols-outlined">task</span>
                    <h6>Convalidar cursos</h6>
                </a>
                <a href="{{ route('historialConvalidaciones') }}" class="{{ Request::routeIs('historialConvalidaciones') ? 'active' : '' }}">
                    <span class="material-symbols-outlined">note_stack</span>
                    <h6>Historial de convalidaciones</h6>
                </a>
                <div class="list_item">
                    <a href="#" class="list_button--click {{ Request::routeIs('postulantesRegistrar', 'postulantesRegistrar.create', 'postulantesVisualizar') ? 'active' : '' }}">
                        <span class="material-symbols-outlined">groups</span>
                        <h6>Postulantes</h6>
                        <span class="material-symbols-outlined" id="list_arrow">keyboard_arrow_down</span>
                    </a>
                    <ul class="list_show ">
                        <li class="list_inside {{ Request::routeIs('postulantesRegistrar.create') ? 'active-text' : '' }}">
                            <a href="{{ route('postulantesRegistrar.create') }}" class="sidebar--inside">• Registrar postulante</a>
                        </li>
                        <li class="list_inside {{ Request::routeIs('postulantesVisualizar') ? 'active-text' : '' }}">
                            <a href="{{ route('postulantesVisualizar') }}" class="sidebar--inside">• Ver lista de postulantes</a>
                        </li>
                    </ul>
                </div>

                <!-- Formulario de Logout -->
                <form id="logoutForm" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="#" class="btnLogout no-active" id="logoutLink">
                        <span class="material-symbols-outlined">logout</span>
                        <h6>Cerrar Sesión</h6>
                    </a>
                </form>
            </div>
        </aside>
        
        <!-- header section-->
        <div class="header">
            <div class="left_menu_close" id="menu_toggle_button">
                <span class="material-symbols-outlined">arrow_back_ios</span>
            </div>
            
            <div class="profile">
                <a href="#" class="notification_container">
                    <span class="material-symbols-outlined">notifications</span>
                    <span class="notification_count">14</span>
                </a>
                <div class="profile-photo">
                  <img src="./images/profile_picture.png" alt="admin@continental_picture"/>
                </div>
                <select class="userList" id="IDUserList">
                    <option value="opcion1">Admin</option>
                    <option value="opcion2">Opción 2</option>
                    <option value="opcion3">Opción 3</option>
                </select>
             </div>
        </div>

        <!-- main section -->
        <div class="main">
            @yield('main-content')
        </div>
    </div>

    <script src="{{ asset('js/dashboardScriptss.js') }}"> </script>
@endsection
