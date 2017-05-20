<?php

namespace App\Http\Controllers;

use App\Chasis;
use Illuminate\Http\Request;

class ChasisController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin'])->except(['json', 'jsonId']);
    }

    public function json()
    {
        return Chasis::all();
    }

    public function jsonId($id)
    {
        return Chasis::find($id);
    }

    public function all()
    {
        $chasis = Chasis::all();

        return view('chasis.index',compact('chasis'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('chasis.form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required|max:80',
            'fondo' => 'required|file|image|mimes:png|max:2048',
            'chasis' => 'required|file|image|mimes:png|max:2048',
            'rueda1x' => 'required|integer',
            'rueda1y' => 'required|integer',
            'rueda2x' => 'required|integer',
            'rueda2y' => 'required|integer',
            'ruedasize' => 'required|integer',
        ]);

        $pathFondo = $request->fondo->store('images');
        $pathChasis = $request->chasis->store('images');
        $chasis = new Chasis;
        $chasis->nombre = $request->nombre;
        $chasis->fondo = $pathFondo;
        $chasis->chasis = $pathChasis;
        $chasis->rueda1x = $request->rueda1x;
        $chasis->rueda1y = $request->rueda1y;
        $chasis->rueda2x = $request->rueda2x;
        $chasis->rueda2y = $request->rueda2y;
        $chasis->ruedasize = $request->ruedasize;
        $chasis->save();

        $request->session()->flash('success', true);

        return view('chasis.form');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Chasis  $chasis
     * @return \Illuminate\Http\Response
     */
    public function show(Chasis $chasis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chasis  $chasis
     * @return \Illuminate\Http\Response
     */
    public function edit(Chasis $chasis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chasis  $chasis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chasis $chasis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chasis  $chasis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chasis $chasis)
    {
        //
    }
}
