<?php

namespace App\Http\Controllers;

use App\Autos;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;

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
        $auto->tazas_id = $request->tazas_id;
        $auto->color = $request->color;
        $auto->user_id = Auth::user()->id;
        $auto->token = Uuid::generate();
        $auto->save();

        $response = array(
            'status' => 'success',
            'msg' => 'El auto se creó correctamente',
        );
        return \Response::json($response);
        //$request->session()->flash('success', true);
        //return redirect()->route('autos.user.all');
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

    public function shared($token)
    {
        $auto = Autos::where('token',$token)->get()->first();
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
