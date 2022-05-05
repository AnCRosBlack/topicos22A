<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function indexProducto()
    {
        // $Productos = Producto::paginate(5);
        $Productos = Producto::join('proveedores','productos.id_proveedor','=','proveedores.id')->select('proveedores.nombre as proveedor', 'productos.*')->paginate(5);
        return view('productos.index',compact('Productos'));
    }
    public function createProducto()
    {
        $Proveedor = Proveedor::all();
        return view('productos.create',compact('Proveedor'));
    }

    public function storeProducto(Request $request)
    {
        // dd($request->all());
        Producto::create($request->all());
        return redirect()->route('producto.index')->with('success','Producto creado');
    }


    public function editProducto(Request $request, $id)
    {
        $Producto = Producto::findorFail($id);
        // $data = $request->only('name','email');
        
        $data=$request->all();
        
        $Producto->update($data);
        return redirect()->route('producto.index')->with('success', 'Producto actualizado exitosamente');
    }

    public function showProducto(Producto $producto){
        $productos = Producto::join('proveedores','productos.id_proveedor','=','proveedores.id')->select('proveedores.nombre as proveedor')->where('productos.id', $producto['id'])->get();
        // dd($productos);
        return view('productos.show',compact('producto','productos'));
    }

    public function getEditProducto($id)
    {
        $Proveedor = Proveedor::all();
        $producto = Producto::join('proveedores','productos.id_proveedor','=','proveedores.id')->select('proveedores.nombre as proveedor', 'productos.*')->where('productos.id', $id)->get();
        return view('productos.edit',compact('producto','Proveedor'));
    }

    public function destroyProducto($id){
            $producto = Producto::findOrFail($id);
            $producto->delete();
            return redirect()->action([ProductController::class, 'indexProducto'])->with('success', 'Producto eliminado exitosamente');
    }
    
}
