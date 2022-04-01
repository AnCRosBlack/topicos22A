<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;


class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
  

    public function user()
    {
        // $Usuarios = User::query()->paginate(5);
         $Usuarios = User::paginate(5);
        // $len = User::all();
        return view('usuarios.index',compact('Usuarios'));
    }
    public function createuser()
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


    public function update(Request $request, $id)
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

    public function getUpdate($id)
    {
        $usuario = User::where('id', $id)->get();
        return view('usuarios.update',compact('usuario'));
    }

    public function delete($id){
            $usuario = User::findOrFail($id);
            $usuario->delete();
            return redirect()->action([UserController::class, 'user']);
    }
    
}
