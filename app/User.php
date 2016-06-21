<?php

namespace Ventas;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'usuarios';

    protected $fillable = [
         'usua_nomb', 'email', 'password',
     ];


        protected $hidden = [
             'password', 'remember_token',
         ];

    public function setPasswordAttribute($valor)
   {
     if(!empty($valor))
     {
       $this->attributes['password'] = \Hash::make($valor);
     }
   }


}
