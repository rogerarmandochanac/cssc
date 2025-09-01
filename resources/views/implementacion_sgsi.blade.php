@extends('base')
@section('contenedor')
    @include('snippets.navbar')
    @include('snippets.diagnostico.header', ['background'=>'background-cuatro','titulo1'=>'implementación ', 'titulo2'=>' de sgsi', 'descripcion'=>'Cumple con las leyes chilenas de ciberseguridad, protección de datos y preparación ante auditorías.'])
    @include('snippets.implementacion_sgsi.que_incluye')
    @include('snippets.implementacion_sgsi.beneficios')
    @include('snippets.diagnostico.modelo')
    @include('snippets.footer')
@endsection