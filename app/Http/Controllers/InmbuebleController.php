<?php

namespace App\Http\Controllers;

use App\inmbueble;
use App\Inmueble;
use Illuminate\Http\Request;

class InmbuebleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $Inmbuelbes = Inmueble::get();
        return view('Inmuebles.index',['inmuebles'=>$Inmbuelbes]);
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
     * @param  \App\inmbueble  $inmbueble
     * @return \Illuminate\Http\Response
     */
    public function show(inmbueble $inmbueble)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\inmbueble  $inmbueble
     * @return \Illuminate\Http\Response
     */
    public function edit(inmbueble $inmbueble)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\inmbueble  $inmbueble
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, inmbueble $inmbueble)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\inmbueble  $inmbueble
     * @return \Illuminate\Http\Response
     */
    public function destroy(inmbueble $inmbueble)
    {
        //
    }
}
