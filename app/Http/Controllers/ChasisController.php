<?php

namespace App\Http\Controllers;

use App\Chasis;
use Illuminate\Http\Request;

class ChasisController extends Controller
{
    public function json()
    {
        return Chasis::all();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
