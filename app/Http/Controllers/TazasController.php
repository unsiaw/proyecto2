<?php

namespace App\Http\Controllers;

use App\Tazas;
use Illuminate\Http\Request;
use Session;

class TazasController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin'])->except(['json', 'jsonId']);
    }

    public function json()
    {
        $tazas = Tazas::all();
        foreach ($tazas as $taza)
        {
            $taza->taza = \Storage::url($taza->taza);
        }
        return $tazas;
    }

    public function jsonId($id)
    {
        $taza = Tazas::find($id);
        if ($taza)
        {
            $taza->taza = \Storage::url($taza->taza);
            return $taza;
        } else {
            return response([],404);
        }
    }

    public function all()
    {
        $tazas = Tazas::all();
        return view('tazas.index',compact('tazas'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tazas.form');
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
            'fondo' => 'required|file|image|mimes:png|max:2048'
        ]);

        $pathFondo = $request->fondo->store('public/images');
        $taza = new Tazas;
        $taza->nombre = $request->nombre;
        $taza->taza = $pathFondo;
        $taza->save();

        $request->session()->flash('success', true);

        return view('tazas.form');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tazas  $tazas
     * @return \Illuminate\Http\Response
     */
    public function show(Tazas $tazas)
    {
        return view('tazas.show', compact('tazas'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tazas  $tazas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $taza = Tazas::findOrFail($id);
        try {
            $taza->delete();
            Session::flash('success', true);
        } catch (\Illuminate\Database\QueryException $e) {
            Session::flash('failed', true);
        }
        return redirect()->route('tazas.admin.all');
    }
}
