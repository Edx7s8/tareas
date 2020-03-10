@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Captura de nueva tarea</div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                @isset($tarea)
                    {!! Form::model($tarea, ['route' => ['tarea.update', $tarea->id], 'method' => 'PATCH']) !!}
                @else
                    {!! Form::open(['route' => 'tarea.store']) !!}
                @endisset()
                        <div class="form-group">
                            {!! Form::label('nombre_tarea', 'Tarea') !!}
                            {!! Form::text('nombre_tarea', null, ['class' => 'form-control', 'id' => 'nombre_tarea']) !!}
                        </div>
                        <div class="form-group">
                            <label for="fecha_inicio">Fecha Inicio</label>
                            {!! Form::date('fecha_inicio', isset($tarea) ? $tarea->fecha_inicio->toDateString() : null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label for="fecha_termino">Fecha Término</label>
                            {!! Form::date('fecha_termino', isset($tarea) ? $tarea->fecha_termino->toDateString() : null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'rows' => '3']) !!}
                        </div>
                        <div class="form-group">
                            <label for="prioridad">Prioridad</label>
                            {!! Form::select('prioridad', [
                                '1' => 'Baja',
                                '5' => 'Media',
                                '10' => 'Alta'
                                ], null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            <label for="prioridad">Categoria</label>
                            {!! Form::select('categoria_id', $categorias, null, ['class' => 'form-control']) !!}
                        </div>
                        <button type="submit" class="btn btn-primary">Crear</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection