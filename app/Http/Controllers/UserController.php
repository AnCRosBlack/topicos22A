<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;



class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
  

    public function index()
    {
        // $Usuarios = User::query()->paginate(5);
         $Usuarios = User::paginate(5);
        // $len = User::all();
        return view('usuarios.index',compact('Usuarios'));
    }
    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        User::create($request->only('name','email')+[
            'password'=> Hash::make($request->Input('password')),
        ]);
        return redirect()->route('usuarios.index')->with('success','Usuario creado');
    }


    public function edit(Request $request, $id)
    {
        $user = User::findorFail($id);
        $data = $request->only('name','email');
        if(trim($request->password)==''){
            $data=$request->except('password');
        }
        else{
            $data=$request->all();
            $data['password']= Hash::make($request->password);
        }

        $user->update($data);
        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado exitosamente');
    }

    public function show(User $user){
        return view('usuarios.show',compact('user'));
    }

    public function getEdit($id)
    {
        $usuario = User::where('id', $id)->get();
        return view('usuarios.edit',compact('usuario'));
    }

    public function destroy($id){
            $usuario = User::findOrFail($id);
            $usuario->delete();
            return redirect()->action([UserController::class, 'index'])->with('success', 'Usuario eliminado exitosamente');
    }
    
}
