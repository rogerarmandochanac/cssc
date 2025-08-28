@extends('base')
@section('contenedor')
    @include('snippets.navbar')
    @include('snippets.diagnostico.header', ['titulo1'=>'capacitación ', 'titulo2'=>'Y CONCIENTIZACIÓN  ', 'descripcion'=>'Entrenamos a tu equipo en ciberseguridad y cumplimiento para fortalecer la cultura organizacional.'])
    @include('snippets.capacitacion.que_incluye')
    @include('snippets.capacitacion.beneficios')
    @include('snippets.diagnostico.modelo')
    @include('snippets.footer')
@endsection