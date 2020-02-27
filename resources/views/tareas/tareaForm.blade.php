@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    <form action="{{route('tareas.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nombre_tarea">Tarea</label>
                            <input type="text" class="form-control" name="nombre_tarea"  placeholder="Nombre de la tarea">
                        </div>

                        <div class="form-group">
                          <label for="fecha_inicio">Fecha Inicio</label>
                          <input type="date" class="form-control" name="fecha_inicio" >
                        </div>

                        <div class="form-group">
                            <label for="fecha_termino">Fecha Final</label>
                            <input type="date" class="form-control" name="fecha_termino" >
                        </div>

                        <div class="form-group">
                            <label for="descripcion">descripcion</label>
                            <input type="text" class="form-control" name="descripcion"  placeholder="Descripcion">
                        </div>

                        <label for="prioridad">Prioridad</label>
                          <select multiple class="form-control"  name="prioridad">
                            <option value= "1">Baja</option>
                            <option value= "5">Media</option>
                            <option value= "10">Alta</option>
                          </select>

                        <div> <button type="submit" class="btn btn-primary" >Submit form</button> </div>

                </div>
            </div>
        </div>
    </div>
</div>






    @endsection
