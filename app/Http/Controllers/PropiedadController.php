<?php

namespace App\Http\Controllers;

use App\propiedad;
use Illuminate\Http\Request;

class PropiedadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propiedades = Propiedad::get();
        return view('Propiedades.index',['propiedades'=>$propiedades]);
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
        $newType = new Propiedad;
        $newType->name = $request->name;
        $newType->save();

        return redirect('/propiedades')->with('status','La propiedad fue agregada con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\propiedad  $propiedad
     * @return \Illuminate\Http\Response
     */
    public function show(propiedad $propiedad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\propiedad  $propiedad
     * @return \Illuminate\Http\Response
     */
    public function edit(propiedad $propiedad,$id)
    {
        $propiedad = Propiedad::find($id);

        return view('propiedades.edit',['propiedad'=>$propiedad]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\propiedad  $propiedad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, propiedad $propiedad,$id)
    {
        $newType = Propiedad::find($id);
        $newType->name = $request->name;
        $newType->save();

        return redirect('/propiedades')->with('status','La propiedad fue agregada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\propiedad  $propiedad
     * @return \Illuminate\Http\Response
     */
    public function destroy(propiedad $propiedad)
    {
        //
    }

    public function delete($id){

        $del = Propiedad::find($id);
        $del->delete();
        return redirect('/propiedades')->with('status','La propiedad fue borrada con exito');
    }
}
