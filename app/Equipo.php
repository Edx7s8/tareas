<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    public $timestamps=false;

    public fuction user(){


        return $this->belognsToMany(Equipo::class);
    }
}
