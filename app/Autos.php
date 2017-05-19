<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autos extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id', 'token'];

    //
    public function chasis()
    {
        return $this->belongsTo(Chasis::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function taza()
    {
        return $this->belongsTo(Tazas::class);
    }
}
