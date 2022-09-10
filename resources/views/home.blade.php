<!-- // Esto es una directiva y apuntan directamente a views -->
@extends('layouts.app')

<!-- Todo lo que este en esta seccion se inyecta en el Yield -->
@section('titulo')
    Pagina Principal
@endsection


@section('contenido')
    <x-listar-post :posts="$posts" />
@endsection