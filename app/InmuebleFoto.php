<?php

namespace Ventas;

use Illuminate\Database\Eloquent\Model;

class InmuebleFoto extends Model
{
    protected $table = 'inmuebles_fotos';
    protected $primaryKey = 'info_iden';
    public $timestamps = false;
}
