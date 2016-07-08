<?php

namespace Ventas;

use Illuminate\Database\Eloquent\Model;

class Deseo extends Model
{
    //
    protected $table = 'lista_deseos';
    protected $primaryKey = 'lide_iden';
    public $timestamps = false;
}
