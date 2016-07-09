<?php

namespace Ventas\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Ventas\Http\Requests;

class DeseoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $inmuebles = DB::table('inmuebles')
                        ->join('lista_deseos', 'lista_deseos.inmu_iden', '=', 'inmuebles.inmu_iden')
                        ->select('*')
                        ->where('inmuebles.usua_iden', '=', $request->user()->id)
                        ->orderBy('inmuebles.inmu_fech','desc')->paginate(10);

        return view('listardeseos')->with('inmuebles', $inmuebles);
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
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $deseo = new \Ventas\Deseo();

        $deseo->inmu_iden = $id;
        $deseo->usua_iden = 7;

        $deseo->save();
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
    public function destroy(Request $request, $id)
    {
        $deseo = \Ventas\Deseo::find($id);
        $deseo->delete();

        return redirect('deseo/listar');
    }

    public function listar()
    {

    }
}
