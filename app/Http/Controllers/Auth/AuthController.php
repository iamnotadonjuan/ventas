<?php

namespace Ventas\Http\Controllers\Auth;

use Ventas\User;
use Validator;
use Ventas\Http\Controllers\Controller;
use Ventas\Http\Requests\RegisterRequest;
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
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    public function postRegister(RegisterRequest $request)
    {
      if($request->ajax())
      {
        $usuario = new User;
        $usuario->usua_nomb = $request->Name;
        $usuario->usua_emai = $request->Email;
        $usuario->usua_clav = bcrypt($request->Password);
        $usuario->usua_dire = $request->Address;
        $usuario->usua_tele = $request->Phone;
        $usuario->tius_iden = 2;
        $usuario->save();

        return response()->json([
          'Message' => 'Te registraste exitosamente'
        ]);
      }
    }
}
