<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chasis extends Model
{
    //
    protected $fillable = [
        'nombre', 'fondo', 'chasis', 'rueda1x', 'rueda1y', 'rueda2x', 'rueda2y', 'ruedasize'
    ];
}
