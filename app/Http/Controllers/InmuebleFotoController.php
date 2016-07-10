<?php

namespace Ventas\Http\Controllers;

use Illuminate\Http\Request;

use Ventas\Http\Requests;

class InmuebleFotoController extends Controller
{
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
        // Guardar el archivo
        $archivo = $request->file('file_imag');
        $nombre = $archivo[0]->getClientOriginalName();
        \Storage::disk('local')->put($nombre,  \File::get($archivo[0]));
        
        $inmuebleFoto = new \Ventas\InmuebleFoto();
        
        $inmuebleFoto->inmu_iden = $request->identificacion;
        $inmuebleFoto->info_foto = $nombre;
        
        $inmuebleFoto->save();
        
        echo json_encode(array("identificacion" => $inmuebleFoto->getKey()));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $inmuebleFoto = \Ventas\InmuebleFoto::find($id);
        $inmuebleFoto->delete();
    }
}
