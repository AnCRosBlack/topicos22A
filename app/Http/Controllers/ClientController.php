<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $Clientes = Cliente::paginate(5);
        return view('cliente.index',compact('Clientes'));
    }
    public function create()
    {
        return view('cliente.create');
    }

    public function store(Request $request)
    {

        Cliente::create($request->all());
        return redirect()->route('clientes.index')->with('success','Cliente creado');
    }


    public function edit(Request $request, $id)
    {
        $Cliente = Cliente::findorFail($id);
        // $data = $request->only('name','email');
        
        $data=$request->all();
        
        $Cliente->update($data);
        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado exitosamente');
    }

    public function show(Cliente $cliente){
        return view('cliente.show',compact('cliente'));
    }

    public function getEdit($id)
    {
        $cliente = Cliente::where('id', $id)->get();
        return view('cliente.edit',compact('cliente'));
    }

    public function destroy($id){
            $cliente = Cliente::findOrFail($id);
            $cliente->delete();
            return redirect()->action([ClientController::class, 'index'])->with('success', 'Cliente eliminado exitosamente');
    }
    
}