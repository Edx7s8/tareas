@extends('layouts.app')

@section('content')
<br>
        <div class="card-body">
            <div class="{{action('TareaController@create')}}"class="btn btn-success"
               <hr>
               Listado
            </div>
            <a href="tareas/create"<button type="button" class="btn btn-primary">Formulario</button> </a>
        </div>

        <table class="table">
            <tr>
                <th>ID </th>
                <th> Tarea </th>
                <th> Descripcion </th>
            </tr>
           @foreach($tareas as $mitarea)
            <tr>
            <td>{{$mitarea->id}}</td>
            <td>
            <a href="{{route('tarea.show',$tarea->id)}}">
                {{$mitarea->nombre_tarea}}
            </td>
            </a>
            <td>{{$mitarea->prioridad}}</td>
            </tr>
            @endforeach


    </body>


</html>