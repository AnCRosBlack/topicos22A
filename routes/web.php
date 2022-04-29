<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//pagina principal redireccionada al login
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

//pagina principal despues de login
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//funciones del usuario
Route::get('/usuarios',  [UserController::class, 'index'])->name('usuarios.index');
Route::post('/usuarios/crear',  [UserController::class, 'store'])->name('usuarios.store');
Route::get('/usuarios/crear',  [UserController::class, 'create'])->name('usuarios.create');
Route::get('/usuarios/update/{id}',  [UserController::class, 'getEdit'])->name('usuarios.getEdit');
Route::put('/usuarios/update/{id}',  [UserController::class, 'edit'])->name('usuarios.edit');
Route::get('/usuarios/{id}', [UserController::class, 'destroy'])->name('usuarios.destroy');
Route::get('/usuario/{user}', [UserController::class, 'show'])->name('usuarios.show');

//funciones del cliente
Route::get('/clientes',  [ClientController::class, 'index'])->name('clientes.index');
Route::post('/clientes/crear',  [ClientController::class, 'store'])->name('clientes.store');
Route::get('/clientes/crear',  [ClientController::class, 'create'])->name('clientes.create');
Route::get('/clientes/update/{id}',  [ClientController::class, 'getEdit'])->name('clientes.getEdit');
Route::put('/clientes/update/{id}',  [ClientController::class, 'edit'])->name('clientes.edit');
Route::get('/clientes/{id}', [ClientController::class, 'destroy'])->name('clientes.destroy');
Route::get('/cliente/{cliente}', [ClientController::class, 'show'])->name('clientes.show');

//funciones del proveedor
Route::get('/proveedor',  [ProviderController::class, 'provider'])->name('proveedor');

//funciones de producto
Route::get('/producto',  [ProductController::class, 'product'])->name('producto');




// Route::post('/proveedor/crear',  [ProviderController::class, 'createprovider'])->name('proveedor.create');
// Route::post('/producto/crear',  [ProductController::class, 'createproduct'])->name('producto.create');
// Route::post('/cliente/crear',  [ClientController::class, 'createclient'])->name('cliente.create');

 

// Route::post('registrarUsuario',  [RegisterController::class, 'create']);


