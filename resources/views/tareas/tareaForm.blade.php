@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    
                    <form>
                            <form action="{{ action('TareaController@store')}} " method="POST"></form>
                            @csrf
                            <div class="card-group">
                            <label for="nombre_tarea">Tarea</label>
                            <input type="text" class="form-control" id="nombre_tarea" rows="2">
                          </div>

                          <div class="form-group">
                            <label for="fecha_Inicio">fecha de Inicio</label>
                            <input type="date" class="form-control" name="fecha_inicio" rows="1">
                          </div>

                          <div class="form-group">
                            <label for="fecha_termino">fecha de termino</label>
                            <input type="date" class="form-control" name="fecha_termino" rows="1">
                          </div>

                          <div class="card-group">
                                <label for="descripion">Descripcion</label>
                                <input type="text" class="form-control" id="descripcion" rows="5">
                              </div>




                      </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
