<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function indexCliente()
    {
        $Clientes = Cliente::paginate(5);
        return view('cliente.index',compact('Clientes'));
    }
    public function createCliente()
    {
        return view('cliente.create');
    }

    public function storeCliente(Request $request)
    {

        Cliente::create($request->all());
        return redirect()->route('clientes.index')->with('success','Cliente creado');
    }


    public function editCliente(Request $request, $id)
    {
        $Cliente = Cliente::findorFail($id);
        // $data = $request->only('name','email');
        
        $data=$request->all();
        
        $Cliente->update($data);
        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado exitosamente');
    }

    public function showCliente(Cliente $cliente){
        return view('cliente.show',compact('cliente'));
    }

    public function getEditCliente($id)
    {
        $cliente = Cliente::where('id', $id)->get();
        return view('cliente.edit',compact('cliente'));
    }

    public function destroyCliente($id){
            $cliente = Cliente::findOrFail($id);
            $cliente->delete();
            return redirect()->action([ClientController::class, 'indexCliente'])->with('success', 'Cliente eliminado exitosamente');
    }
    
}