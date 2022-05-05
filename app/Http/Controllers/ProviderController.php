<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function indexProveedor()
    {
        $Proveedores = Proveedor::paginate(5);
        return view('proveedores.index',compact('Proveedores'));
    }
    public function createProveedor()
    {
        return view('proveedores.create');
    }

    public function storeProveedor(Request $request)
    {

        Proveedor::create($request->all());
        return redirect()->route('proveedor.index')->with('success','Proveedor creado');
    }


    public function editProveedor(Request $request, $id)
    {
        $Proveedor = Proveedor::findorFail($id);
        // $data = $request->only('name','email');
        
        $data=$request->all();
        
        $Proveedor->update($data);
        return redirect()->route('proveedor.index')->with('success', 'Proveedor actualizado exitosamente');
    }

    public function showProveedor(Proveedor $proveedor){
        return view('proveedores.show',compact('proveedor'));
    }

    public function getEditProveedor($id)
    {
        $proveedor = Proveedor::where('id', $id)->get();
        return view('proveedores.edit',compact('proveedor'));
    }

    public function destroyProveedor($id){
            $proveedor = Proveedor::findOrFail($id);
            $proveedor->delete();
            return redirect()->action([ProviderController::class, 'indexProveedor'])->with('success', 'Proveedor eliminado exitosamente');
    }
    
}