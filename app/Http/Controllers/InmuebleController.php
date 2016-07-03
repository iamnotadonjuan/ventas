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

  /*  public function __construct()
    {
      $this->middleware('auth');
    }*/

    public function index()
    {
        $inmuebles = DB::table('inmuebles')
                        ->join('inmuebles_fotos', 'inmuebles_fotos.inmu_iden', '=', 'inmuebles.inmu_iden')
                        ->select('*')
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
    }
}
