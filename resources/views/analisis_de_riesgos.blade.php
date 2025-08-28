@extends('base')
@section('contenedor')
    @include('snippets.navbar')
    @include('snippets.diagnostico.header', ['titulo1'=>'análisis DE RIESGOS  ', 'titulo2'=>'Y PLANES DE ACCIÓN', 'descripcion'=>'Identificamos amenazas y definimos acciones para reducir tu exposición y proteger tu organización.'])
    @include('snippets.analisis_de_riesgos.que_incluye')
    @include('snippets.analisis_de_riesgos.beneficios')
    @include('snippets.diagnostico.modelo')
    @include('snippets.footer')
@endsection