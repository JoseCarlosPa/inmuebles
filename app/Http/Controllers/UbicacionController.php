<?php

namespace App\Http\Controllers;

use App\Ubicacion;
use Illuminate\Http\Request;

class UbicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Ubicaciones = Ubicacion::get();
        return view('Ubicaciones.index',['Ubicaciones'=>$Ubicaciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newUbi = new Ubicacion;
        $newUbi->name = $request->name;
        $newUbi->save();
        return redirect('/ubicaciones')->with('status','La ubicaciones fue agregada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ubicacion  $ubicacion
     * @return \Illuminate\Http\Response
     */
    public function show(ubicacion $ubicacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ubicacion  $ubicacion
     * @return \Illuminate\Http\Response
     */
    public function edit(ubicacion $ubicacion,$id)
    {
        $ubicacion = Ubicacion::find($id);
        return view('ubicaciones.edit',['ubicacion'=>$ubicacion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ubicacion  $ubicacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ubicacion $ubicacion,$id)
    {
        $editU = Ubicacion::find($id);
        $editU->name = $request->name;
        $editU->save();
        return redirect('/ubicaciones')->with('status','La ubicaciones fue editada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ubicacion  $ubicacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(ubicacion $ubicacion)
    {

    }
    public function delete($id){

        $del = Ubicacion::find($id);
        $del->delete();
        return redirect('/ubicaciones')->with('status','La ubicaciones fue borrada con exito');
    }
}
