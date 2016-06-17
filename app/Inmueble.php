<?php

namespace Ventas;

use Illuminate\Database\Eloquent\Model;

class Inmueble extends Model
{
    protected $table = 'inmuebles';
    protected $primaryKey = 'inmu_iden';
    public $timestamps = false;
}
