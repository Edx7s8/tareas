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
                    {!! Form::model($equipo, ['route' => ['equipo.update', $equipo->id], 'method' => 'PATCH']) !!}
                @else
                    {!! Form::open(['route' => 'equipo.store']) !!}
                @endisset()
                        <div class="form-group">
                            {!! Form::label('nombre_equipo', 'Equipo') !!}
                            {!! Form::text('nombre_equipo', null, ['class' => 'form-control', 'id' => 'nombre_tarea']) !!}
                        </div>

                        <div class="form-group">
                            <label for="prioridad">Integrantes</label>
                            {!! Form::select('user_id', $users, null, ['class' => 'form-control']) !!}
                        </div>
                        <button type="submit" class="btn btn-primary">Crear</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection