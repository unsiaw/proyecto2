<?php

namespace App\Http\Controllers;

use App\Autos;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AutosUserController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth'])->except(['create', 'shared']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autos = Autos::where('user_id',Auth::user()->id)->get();

        return view('autos.index',compact('autos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('autos.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $auto = new Autos;
        $auto->chasis_id = $request->chasis_id;
        $auto->taza_id = $request->taza_id;
        $auto->user_id = Auth::user()->id;
        $auto->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Autos  $auto
     * @return \Illuminate\Http\Response
     */
    public function show(Autos $auto)
    {
        return view('autos.show',compact('auto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Autos  $autos
     * @return \Illuminate\Http\Response
     */
    public function edit(Autos $autos)
    {
        //
    }

    public function shared($uuid)
    {
        $auto = Autos::where('uuid',$uuid)->get()->first();
        if ($auto)
        {
            return view('autos.show',compact('auto'));
        } else {
            return redirect('/');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Autos  $autos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Autos $autos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Autos  $autos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autos $autos)
    {
        //
    }
}
