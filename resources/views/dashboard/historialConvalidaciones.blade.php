@extends('layouts.layoutDashboard')

@section('title', 'Historial de convalidaciones')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/historialConvalidacionesStyle.css') }}">
@endpush

@section('main-content')
	<h2> Historial de convalidaciones </h2>
	<script src={{ asset('js/historialConvalidaciones.js') }}> </script>
@endsection
