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

    public function guardar(Request $request){
        $nvoCliente = new Cliente();
        $nvoCliente->nombre = $request->nombre;
        $nvoCliente->apellido = $request->apellido;
        $nvoCliente->salario = $request->sueldo;
        $nvoCliente->fechaNacimiento = $request->fechaNacimiento;
        $nvoCliente->save();
        return to_route('clientes');
    }

    public function verCliente($codigo){
        $cliente = Cliente::find($codigo);        
        return view('visualizar', compact('cliente'));
    }

    public function verEditar($id){
        $cliente= Cliente::find($id);
        return view('editar', compact('cliente'));
    }

    public function actualizar(Request $request, $id){
        $cliente = Cliente::find($id);
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->salario = $request->sueldo;
        $cliente->fechaNacimiento = $request->fechaNacimiento;

        $cliente->save();
        return to_route('clientes');
    }

    public function eliminar($id){
        $cliente = Cliente::find($id);
        return view('eliminar', compact('cliente'));
    }

    public function destroy($id){
        $cliente = Cliente::find($id);
        $cliente->delete();
        return to_route('clientes');
    }

}
