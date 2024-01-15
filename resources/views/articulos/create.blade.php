@extends('layouts.master')

@section('titulo', 'RevistApp')

@section('content')
    <div class="container mt-4">
        <h2>Crear un artículo:</h2>
        <form method="POST" action="{{ route('articulos.store') }}" class="mt-3">
            @csrf
            <div class="mb-3">
                <label for="titulo" class="form-label">Título:</label>
                <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>
            <div class="mb-3">
                <label for="contenido" class="form-label">Contenido:</label>
                <textarea class="form-control" id="contenido" name="contenido" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{ route('articulos.index') }}" class="btn btn-secondary ml-2">Volver</a>
        </form>
    </div>
@endsection

@section('footer', 'Javier Jamaica')
