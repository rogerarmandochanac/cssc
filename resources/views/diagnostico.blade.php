@extends('base')
@section('contenedor')
    @include('snippets.navbar')
    @include('snippets.diagnostico.header', ['titulo1'=>'DIÁGNOSTICO 360º', 'titulo2'=>' DE CIBERSEGURIDAD Y COMPLIANCE', 'descripcion'=>'Evaluación técnica y normativa integral, ideal para empresas que desean conocer su estado actual, identificar brechas y planificar mejoras.'])
    @include('snippets.diagnostico.que_incluye')
    @include('snippets.diagnostico.beneficios')
    @include('snippets.diagnostico.modelo')
    @include('snippets.footer')
@endsection