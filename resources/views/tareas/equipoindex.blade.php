@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Lista de tareas</div>

                <div class="card-body">
                <a href="{{ action('TareaController@create') }}" class="btn btn-success btn-sm">Nueva Tarea</a>
                    <hr>
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Tarea</th>
                            <th>Integrantes</th>
                            <th>Accion</th>
                          
                        </tr>
                        @foreach($tareas as $tarea)
                            <tr>
                                <td>{{ $tarea->id }}</td>
                                <td>
                                    <a href="{{ route('tarea.show', $tarea->id) }}">
                                        {{ $tarea->nombre_tarea }}
                                    </a>
                                </td>

                                <td>{{ $equipo->id }}</td>
                                <td>{{ $equipo->nombre_equipo }}</td>

                               <a href="{{route('equipo_id', $equipo)}}">
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection