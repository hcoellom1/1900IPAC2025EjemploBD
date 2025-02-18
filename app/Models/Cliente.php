<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //La llave primaria de la tabla clientes es codigoCliente
    protected $primaryKey = 'codigoCliente';

    public $timestamps = false;
}
