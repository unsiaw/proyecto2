<?php

namespace App\Http\Controllers;

use App\Autos;
use Session;

class AutosAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['admin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autos = Autos::all();

        return view('autos.admin.index',compact('autos'));
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
     * Remove the specified resource from storage.
     *
     * @param  \App\Autos  $autos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $auto = Autos::findOrFail($id);
        $auto->delete();
        Session::flash('success', true);
        return redirect()->route('autos.admin.all');
    }
}
