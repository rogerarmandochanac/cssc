@extends('base')
@section('contenedor')
    @include('snippets.navbar')
    @include('snippets.diagnostico.header', ['titulo1'=>'RED TEAM ', 'titulo2'=>'Y ethical hacking', 'descripcion'=>'Simulación realista de ataques para descubrir puntos ciegos antes que los atacantes reales lo hagan.'])
    @include('snippets.read_team_and_hethical_hacking.que_incluye')
    @include('snippets.read_team_and_hethical_hacking.beneficios')
    @include('snippets.diagnostico.modelo')
    @include('snippets.footer')
@endsection