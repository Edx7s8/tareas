<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    //

    
    protected $fillable = [
   'categoria_id' , 'user_id',
   'nombre_tarea', 'prioridad',
   'fecha_inicio', 'fecha_termino',
   'descripcion'
    ];
    
    protected $dates=['fecha_inicio','fecha_termino', 'created']
    public function user()
    {
      
        return $this->belongsTo(User::class); //1:M a nivel de modelos


    }
}
