<?php

namespace Ventas\Http\Controllers;

use Illuminate\Http\Request;
use Ventas\User;
use Auth;
use Hash;

use Ventas\Http\Requests;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listing()
    {
      if (Auth::user()->tius_iden == 1)
      {
        $usuarios = User::all();
      }
      else
      {
        $usuarios = User::select()->where('id', '=', Auth::user()->id)->get();
      }

      return response()->json(
        $usuarios->toArray()
      );
    }

    public function index()
    {
       return view('user');
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
        $usuario = User::find($id);

        return response()->json(
            $usuario->toArray()
        );
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
        $usuario = User::find($id);
        $usuario->usua_nomb = $request->Nombre;
        $usuario->email = $request->Email;
        $usuario->usua_tele = $request->Tel;
        $usuario->usua_dire = $request->Address;
        if($request->MyPassword != null)
        {
          if (Hash::check($request->MyPassword, Auth::user()->password)){
           $usuario->where('email', '=', Auth::user()->email)
                ->update(['password' => bcrypt($request->Password)]);
                }
        }
        $usuario->save();

        return response()->json([
            'mensaje' => 'listo'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);

        return response()->json([
          'Mensaje' => 'eliminado'
        ]);
    }
}
