@extends('base')
@section('contenedor')
    @include('snippets.navbar')
    @include('snippets.nosotros.header')
    @include('snippets.nosotros.equipo')
    <div class="mision-vision">
        @include('snippets.nosotros.mision')
        @include('snippets.nosotros.vision')
    </div>
    @include('snippets.nosotros.valores')
    @include('snippets.nosotros.sello')
    @include('snippets.footer')
@endsection