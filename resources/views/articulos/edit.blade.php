@extends('layouts.master')

@section('titulo', 'RevistApp')

@section('content')
    <div class="container mt-4">
        <h2>Editar artículo:</h2>
        <form method="POST" action="{{ route('articulos.update', $articulo) }}" class="mt-3">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="titulo" class="form-label">Título:</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $articulo->titulo }}" required>
            </div>
            <div class="mb-3">
                <label for="contenido" class="form-label">Contenido:</label>
                <textarea class="form-control" id="contenido" name="contenido" rows="3" required>{{ $articulo->contenido }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Editar</button>
            <a href="{{ route('articulos.index') }}" class="btn btn-secondary ml-2">Volver</a>
        </form>
    </div>
@endsection

@section('footer', 'Javier Jamaica')
