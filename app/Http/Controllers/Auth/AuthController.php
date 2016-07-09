<?php

namespace Ventas\Http\Controllers\Auth;

use Ventas\User;
use Validator;
use Auth;
use Ventas\Http\Controllers\Controller;
use Ventas\Http\Requests\RegisterRequest;
use Ventas\Http\Requests\LoginRequest;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectCliente = '/deseo/listar';
    protected $redirectAdministrador = '/inmueble/administrarinmuebles';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
     public function __construct()
     {
         $this->middleware($this->guestMiddleware(), ['except' => 'getLogout']);
     }

    public function postRegister(RegisterRequest $request)
    {
      if($request->ajax())
      {
        $usuario = new User;
        $usuario->usua_nomb = $request->Name;
        $usuario->email = $request->Email;
        $usuario->password = $request->Password;
        $usuario->usua_dire = $request->Address;
        $usuario->usua_tele = $request->Phone;
        $usuario->tius_iden = 2;
        $usuario->save();

        return response()->json([
          'Message' => 'Te registraste exitosamente'
        ]);
      }
    }

    public function postLogin(Request $request)
    {
      if (Auth::attempt(
            [
                'email' => $request->email,
                'password' => $request->password,
            ]

            )){
            
            if (auth()->user()->tius_iden == 1) {
                return redirect()->intended($this->redirectAdministrador);
            } else {
                return redirect()->intended($this->redirectCliente);
            }
        } else {
            $rules = [
                'email' => 'required|email',
                'password' => 'required',
            ];

            $messages = [
                'email.required' => 'El campo email es requerido',
                'email.email' => 'El formato de email es incorrecto',
                'password.required' => 'El campo password es requerido',
            ];

            $validator = Validator::make($request->all(), $rules, $messages);

            return redirect('/')
            ->withErrors($validator)
            ->withInput()
            ->with('message', 'Datos incorrectos');
        }
    }
}
