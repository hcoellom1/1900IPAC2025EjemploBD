<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    
    public function obtenerTodosClientes(){
        $clientes = Cliente::all();
        return view('clientes', compact('clientes'));
    }

    public function obtenerPorCodigo($codigo){
        $cliente = Cliente::find($codigo);
        if($cliente == null){
            return "No existe el cliente";
        }
        return  $cliente;
    }

    public function crearNuevo(){
        return view('crear');
    }

}
