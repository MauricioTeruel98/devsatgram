@extends('layouts.app')

@section('titulo')
    Pagina Principal
@endsection 

@section('content')

    <x-listar-post :posts="$posts" />

    {{-- @forelse ($posts as $post)
        
    @empty
        <h1>No hay posts</h1>
    @endforelse --}}

@endsection