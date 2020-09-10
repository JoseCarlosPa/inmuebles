<?php

namespace App\Http\Controllers;

use App\Album;
use App\Inmueble;
use App\Propiedad;
use App\Ubicacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
    public function show(Inmueble $inmbueble,$id)
    {
        $inm = Inmueble::find($id);
        $ubicaciones = Ubicacion::get();
        $tipos = Propiedad::get();
        $album = Album::where('id_inmuebe',$id)->get();
        return view('Inmuebles.ver',['datos'=>$inm,'ubicaciones'=>$ubicaciones,'tipos'=>$tipos,'albumes'=>$album]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\inmbueble  $inmbueble
     * @return \Illuminate\Http\Response
     */
    public function edit(Inmueble $inmbueble, $id)
    {
        $in = Inmueble::find($id);
        $propiedades = Propiedad::get();
        $ubicaciones = Ubicacion::get();

        $albumes = Album::where('id_inmuebe',$id)->get();
        return view('Inmuebles.edit',['inmueble'=>$in,'propiedades'=>$propiedades,'ubicaciones'=>$ubicaciones,'albumes'=>$albumes]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\inmbueble  $inmbueble
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inmueble $inmbueble,$id)
    {
        $editIn = Inmueble::find($id);
        $editIn->nombre = $request->nombre;
        $editIn->venta_renta = $request->venta_renta;
        $editIn->id_propiedad = $request->propiedad;
        $editIn->id_ubicacion = $request->ubicacion;
        $editIn->extracto = $request->extracto;

        $editIn->precio = $request->precio;
        $editIn->ciudad = $request->ciudad;
        $editIn->municipio = $request->municipio;
        $editIn->m2Terreno = $request->m2t;
        $editIn->m2Cons = $request->m2c;
        $editIn->google_maps = $request->google_maps;

        $editIn->agua = $request->agua;
        $editIn->elect = $request->elect;

        if(($request->img)== null){
            $editIn->img = $request->img_aux;
        }else{
            $file = $request->file('img');

            \Storage::disk('local')->put($request->img,\File::get($file));
            //$request->file('img')->store('public');
            $editIn->img = $request->file('img')->store('');
        }

        if(($request->pdf)==null){
            $editIn->pdf = $request->pdf_aux;
        }else{
            $file = $request->file('pdf');
            \Storage::disk('local')->put($request->pdf,\File::get($file));

            $editIn->pdf = $request->file('pdf')->store('');
        }

        $editIn->save();

        return redirect('/inmuebles')->with('status','El inmueble fue actualizado con exito');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\inmbueble  $inmbueble
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inmueble $inmbueble)
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
        $propiedades = Propiedad::get();

        $ubicaciones = Ubicacion::get();
        return view('inmuebles.show',['resultados'=>$filtro,'propiedades'=>$propiedades,'ubicaciones'=>$ubicaciones]);
    }

    public function bajaC(){

        $filtro = Inmueble::where('id_ubicacion',1)->get();
        $propiedades = Propiedad::get();

        $ubicaciones = Ubicacion::get();
        return view('filtros.bajacalifornia',['resultados'=>$filtro,'propiedades'=>$propiedades,'ubicaciones'=>$ubicaciones]);
    }
    public function qro(){

        $filtro = Inmueble::where('id_ubicacion',2)->get();
        $propiedades = Propiedad::get();

        $ubicaciones = Ubicacion::get();
        return view('filtros.queretaro',['resultados'=>$filtro,'propiedades'=>$propiedades,'ubicaciones'=>$ubicaciones]);
    }
    public function Guan(){

        $filtro = Inmueble::where('id_ubicacion',3)->get();
        $propiedades = Propiedad::get();

        $ubicaciones = Ubicacion::get();
        return view('filtros.guanajuato',['resultados'=>$filtro,'propiedades'=>$propiedades,'ubicaciones'=>$ubicaciones]);
    }
    public function sanL(){

        $filtro = Inmueble::where('id_ubicacion',4)->get();
        $propiedades = Propiedad::get();

        $ubicaciones = Ubicacion::get();
        return view('filtros.sanluis',['resultados'=>$filtro,'propiedades'=>$propiedades,'ubicaciones'=>$ubicaciones]);
    }

    public function addimg(Request $request){

        $newImg = new Album;

        $newImg->id_inmuebe = $request->id_inmuebe;
        $file = $request->file('img');
        \Storage::disk('local')->put($request->img,\File::get($file));

        //$request->file('img')->store('public');
        $newImg->img = $request->file('img')->store('');
        $newImg->save();
        return Redirect::back();

    }

    public function deleteImg($id){

        $del = Album::find($id);
        $del->delete();
        return Redirect::back();
    }







}
