<?php

namespace App\Http\Controllers;

use App\Tarea;
use App\Categoria;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tareas = Tarea::all();

        return view('tareas.tareaIndex', compact('tareas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all()->pluck('nombre_categoria', 'id');
        return view('tareas.tareaForm', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_tarea' => 'required|max:255',
            'fecha_inicio' => 'required|date',
            'fecha_termino' => 'required|date',
            'descripcion' => 'required|min:5',
            'prioridad' => 'required|int|min:1|max:10',
        ]);

        $request->merge(['user_id' => \Auth::id()]);
        Tarea::create($request->all());

        return redirect()->route('tarea.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function show(Tarea $tarea)
    {
        return view('tareas.tareaShow', compact('tarea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarea $tarea)
    {
        $categorias = Categoria::all()->pluck('nombre_categoria', 'id');
        return view('tareas.tareaForm', compact('tarea', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarea $tarea)
    {
        $request->validate([
            'nombre_tarea' => 'required|max:255',
            'fecha_inicio' => 'required|date',
            'fecha_termino' => 'required|date',
            'descripcion' => 'required|min:5',
            'prioridad' => 'required|int|min:1|max:10',
        ]);

        Tarea::where('id', $tarea->id)
            ->update($request->except('_token', '_method'));

        return redirect()->route('tarea.show', $tarea->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarea $tarea)
    {
        $tarea->delete();
        return redirect()->route('tarea.index');
    }
}