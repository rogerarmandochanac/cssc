@extends('base')
@section('contenedor')
    @include('snippets.navbar')
    @include('snippets.diagnostico.header', ['background'=>'background-tres','titulo1'=>'alineamiento legal ', 'titulo2'=>'y normativo', 'descripcion'=>'Cumple con las leyes chilenas de ciberseguridad, protección de datos y preparación ante auditorías.'])
    @include('snippets.alineamiento_legal.que_incluye')
    @include('snippets.alineamiento_legal.beneficios')
    @include('snippets.diagnostico.modelo')
    @include('snippets.footer')
@endsection