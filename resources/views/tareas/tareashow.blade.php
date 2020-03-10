@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Lista de tareas</div>

                <div class="card-body">
                <a href="{{ route('tarea.edit', $tarea->id) }}" class="btn btn-warning btn-sm">Editar Tarea</a>
                    <hr>

                    <form action="{{ route('tarea.destroy', $tarea->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>

                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Tarea</th>
                            <th>Descripcion</th>
                            <th>Inicio</th>
                            <th>Término</th>
                            <th>Prioridad</th>
                        </tr>
                        <tr>
                            <td>{{ $tarea->id }}</td>
                            <td>{{ $tarea->nombre_tarea }}</td>
                            <td>{{ $tarea->descripcion }}</td>
                            <td>{{ $tarea->fecha_inicio->format('d/m/Y') }}</td>
                            <td>{{ $tarea->fecha_termino->format('d/m/Y') }}</td>
                            <td>{{ $tarea->prioridad }}</td>
                        </tr>
                        <tr>
                            <td colspan="6">
                                Usuario: {{ $tarea->user->name }} ({{ $tarea->user->email }})<br>
                                Categoria: {{ $tarea->categoria->nombre_categoria }}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection