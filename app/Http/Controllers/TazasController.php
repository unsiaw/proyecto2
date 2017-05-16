<?php

namespace App\Http\Controllers;

use App\Tazas;
use Illuminate\Http\Request;

class TazasController extends Controller
{

    public function json()
    {
        return Tazas::all();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tazas.index');
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
        if ($request->hasFile('fondo') && $request->fondo->isValid())
        {
            $extension = $request->fondo->extension();
            $path = $request->fondo->store('images');
            $taza = new Tazas;
            $taza->nombre = $request->fondo->getClientOriginalName();
            $taza->taza = $path;
            $taza->save();
            return 'todo ok';
        }
        return 'todo mal';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tazas  $tazas
     * @return \Illuminate\Http\Response
     */
    public function show(Tazas $tazas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tazas  $tazas
     * @return \Illuminate\Http\Response
     */
    public function edit(Tazas $tazas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tazas  $tazas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tazas $tazas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tazas  $tazas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tazas $tazas)
    {
        //
    }
}
