<?php

namespace Ventas\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Ventas\Http\Requests;

class InmuebleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inmuebles = DB::table('inmuebles')
                        ->join('inmuebles_fotos', 'inmuebles_fotos.inmu_iden', '=', 'inmuebles.inmu_iden')
                        ->select('*')
                        ->where('inmuebles.inmu_est', '=', 'Activo')
                        ->groupBy('inmuebles.inmu_iden')->orderBy('inmuebles.inmu_fech','desc')->take(8)->get();

        return view('inicio')->with('inmuebles', $inmuebles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forminmueble');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inmueble = new \Ventas\Inmueble();

        $inmueble->inmu_nomb = $request->text_nomb;
        $inmueble->inmu_desc = $request->tear_desc;
        $inmueble->inmu_valo = $request->text_valo;
        $inmueble->inmu_tine = $request->radi_tipo;
        $inmueble->inmu_npla = $request->numb_npla;
        $inmueble->inmu_fech = $request->date_fech;
        $inmueble->inmu_nhab = $request->numb_habi;
        $inmueble->inmu_nban = $request->numb_bano;
        $inmueble->inmu_npar = $request->numb_parq;
        $inmueble->inmu_npis = $request->numb_piso;
        $inmueble->inmu_m2c  = $request->numb_m2c;
        $inmueble->inmu_m2nc = $request->numb_m2nc;
        $inmueble->inmu_terr = (!isset($request->chec_terr)) ? false : true;
        $inmueble->inmu_estr = $request->sele_estr;
        $inmueble->inmu_agua = (!isset($request->chec_agua)) ? false : true;
        $inmueble->inmu_luz  = (!isset($request->chec_ener)) ? false : true;
        $inmueble->inmu_gas  = (!isset($request->chec_gas)) ? false : true;
        $inmueble->inmu_tele = (!isset($request->chec_tele)) ? false : true;
        $inmueble->inmu_bbq  = (!isset($request->chec_bbq)) ? false : true;
        $inmueble->inmu_prop = $request->radi_prop;
        $inmueble->inmu_feed = date("Y-m-d");
        $inmueble->inmu_est  = 'Desactivado';
        $inmueble->usua_iden = $request->user()->id;
        $inmueble->save();
        
        echo json_encode(array("identificacion" => $inmueble->getKey()));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inmuebles = DB::table('inmuebles')
                        ->join('inmuebles_fotos', 'inmuebles_fotos.inmu_iden', '=', 'inmuebles.inmu_iden')
                        ->select('*')
                        ->where('inmuebles.inmu_iden',$id)
                        ->groupBy('inmuebles.inmu_iden')->orderBy('inmuebles.inmu_fech','desc')->take(8)->get();
        
        return view('listarinmueble')->with('inmuebles', $inmuebles);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inmuebles = DB::table('inmuebles')
                        ->select('*')
                        ->where('inmuebles.inmu_iden', '=', $id)->get();
        
        $inmueblesFotos = DB::table('inmuebles_fotos')
                        ->select('*')
                        ->where('inmuebles_fotos.inmu_iden', '=', $id)->get();
                
        return view('forminmueble')->with('inmuebles', $inmuebles)->with('inmueblesfotos', $inmueblesFotos);
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
        $inmueble = \Ventas\Inmueble::find($id);
        $inmueble->inmu_nomb = $request->text_nomb;
        $inmueble->inmu_desc = $request->tear_desc;
        $inmueble->inmu_valo = $request->text_valo;
        $inmueble->inmu_tine = $request->radi_tipo;
        $inmueble->inmu_npla = $request->numb_npla;
        $inmueble->inmu_fech = $request->date_fech;
        $inmueble->inmu_nhab = $request->numb_habi;
        $inmueble->inmu_nban = $request->numb_bano;
        $inmueble->inmu_npar = $request->numb_parq;
        $inmueble->inmu_npis = $request->numb_piso;
        $inmueble->inmu_m2c  = $request->numb_m2c;
        $inmueble->inmu_m2nc = $request->numb_m2nc;
        $inmueble->inmu_terr = (!isset($request->chec_terr)) ? false : true;
        $inmueble->inmu_estr = $request->sele_estr;
        $inmueble->inmu_agua = (!isset($request->chec_agua)) ? false : true;
        $inmueble->inmu_luz  = (!isset($request->chec_ener)) ? false : true;
        $inmueble->inmu_gas  = (!isset($request->chec_gas)) ? false : true;
        $inmueble->inmu_tele = (!isset($request->chec_tele)) ? false : true;
        $inmueble->inmu_bbq  = (!isset($request->chec_bbq)) ? false : true;
        $inmueble->inmu_prop = $request->radi_prop;
        $inmueble->inmu_feed = date("Y-m-d");
        $inmueble->usua_iden = $request->user()->id;
        
        $inmueble->save();
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
        $inmueble = \Ventas\Inmueble::find($id);
        $inmueble->delete();
        
        return redirect('inmueble/administrarinmuebles');
    }
    
    /**
     * Lista todos los inmuebles que serán activados para su muestra
     * 
     * @return view
     */
    public function administrarInmuebles(Request $request)
    {
        if($request->user()->tius_iden == 1){
            $inmuebles = DB::table('inmuebles')
                            ->select('*')
                            ->orderBy('inmuebles.inmu_iden','desc')->paginate(10);
        } else {
            $inmuebles = DB::table('inmuebles')
                            ->select('*')
                            ->where('inmuebles.usua_iden', '=', $request->user()->id)
                            ->orderBy('inmuebles.inmu_iden','desc')->paginate(10);
        }
        
        return view('listarinmuebles')->with('inmuebles', $inmuebles);
    }
    
    /**
     * Cambia el estado del inmueble seleccionado
     * 
     * @param Request $request
     */
    public function cambiarEstado(Request $request)
    {
        $estado = 'Desactivado';
        $identificacion = $request->identificacion;
        
        $inmueble = \Ventas\Inmueble::find($identificacion);
        
        if($inmueble->inmu_est == 'Activo'){
            $inmueble->inmu_est = 'Desactivado';
            $estado = 'Desactivado';
        }else{
            $inmueble->inmu_est = 'Activo';
            $estado = 'Activo';
        }

        $inmueble->save();

        echo json_encode(array("estado" => $estado));
    }
}
