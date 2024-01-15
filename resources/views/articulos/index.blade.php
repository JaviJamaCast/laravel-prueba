@extends('layouts.master')

@section('title', 'Lista de Artículos')

@section('titulo', 'RevistApp')

@section('content')
    <div class="container mt-4">
        <h2>Listado de Artículos:</h2>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Actualizar</th>
                        <th>Eliminar</th>
                        <th>Ver</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articulos as $articulo)
                        <tr>
                            <td>{{ $articulo->titulo }}</td>
                            <td>
                                <a href="{{ route('articulos.edit', $articulo) }}" class="btn btn-primary btn-sm">Editar</a>
                            </td>
                            <td>
                                <form action="{{ route('articulos.destroy', $articulo) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                            <td>
                                <a href="{{ route('articulos.show', $articulo) }}" class="btn btn-info btn-sm">Ver</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ route('articulos.create') }}" class="btn btn-primary">Crear</a>

        </div>
    </div>
@endsection

@section('footer', 'Javier Jamaica')
