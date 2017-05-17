<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tazas extends Model
{
    //
    protected $fillable = [
        'nombre', 'taza'
    ];

    public function autos()
    {
        return $this->hasMany(Autos::class);
    }
}
