<?php

namespace App\Http\Controllers;

use App\Inmueble;
use App\Propiedad;
use App\Ubicacion;
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
        $ubicaciones = Ubicacion::get();
        $tipos = Propiedad::get();
        return view('Inmuebles.index',['inmuebles'=>$Inmbuelbes,'ubicaciones'=>$ubicaciones,'propiedades'=>$tipos]);
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
        $newIn = new Inmueble;
        $newIn->nombre = $request->nombre;
        $newIn->venta_renta = $request->venta_renta;
        $newIn->id_propiedad = $request->propiedad;
        $newIn->id_ubicacion = $request->ubicacion;

        $newIn->save();
        return redirect('/inmuebles')->with('status','Se agrego el inmueble exitosamente');



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


    public function delete($id){

        $del = Inmueble::find($id);
        $del->delete();
        return redirect('/inmuebles')->with('status','El inmueble fue borrada con exito');
    }

    public function filtro(Request $request){

        $filtro = Inmueble::filtro($request->venta_renta,$request->tipo,$request->ubicacion);


        return view('inmuebles.show',['resultados'=>$filtro]);
    }


}
