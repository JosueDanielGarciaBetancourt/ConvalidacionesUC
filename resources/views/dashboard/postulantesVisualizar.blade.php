@extends('layouts.layoutDashboard')

@section('title', 'Lista de postulantes')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/historialConvalidacionesStyle.css') }}">
@endpush

@section('main-content')
	<h2> Ver lista de postulantes </h2>
	<script src={{ asset('js/historialConvalidaciones.js') }}> </script>
@endsection
