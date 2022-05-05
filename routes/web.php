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
Route::get('/clientes',  [ClientController::class, 'indexCliente'])->name('clientes.index');
Route::post('/clientes/crear',  [ClientController::class, 'storeCliente'])->name('clientes.store');
Route::get('/clientes/crear',  [ClientController::class, 'createCliente'])->name('clientes.create');
Route::get('/clientes/update/{id}',  [ClientController::class, 'getEditCliente'])->name('clientes.getEdit');
Route::put('/clientes/update/{id}',  [ClientController::class, 'editCliente'])->name('clientes.edit');
Route::get('/clientes/{id}', [ClientController::class, 'destroyCliente'])->name('clientes.destroy');
Route::get('/cliente/{cliente}', [ClientController::class, 'showCliente'])->name('clientes.show');

//funciones del proveedor
Route::get('/proveedor',  [ProviderController::class, 'indexProveedor'])->name('proveedor.index');
Route::post('/proveedor/crear',  [ProviderController::class, 'storeProveedor'])->name('proveedor.store');
Route::get('/proveedor/crear',  [ProviderController::class, 'createProveedor'])->name('proveedor.create');
Route::get('/proveedor/update/{id}',  [ProviderController::class, 'getEditProveedor'])->name('proveedor.getEdit');
Route::put('/proveedor/update/{id}',  [ProviderController::class, 'editProveedor'])->name('proveedor.edit');
Route::get('/proveedores/{id}', [ProviderController::class, 'destroyProveedor'])->name('proveedor.destroy');
Route::get('/proveedor/{proveedor}', [ProviderController::class, 'showProveedor'])->name('proveedor.show');


//funciones de producto
Route::get('/producto',  [ProductController::class, 'indexProducto'])->name('producto.index');
Route::post('/producto/crear',  [ProductController::class, 'storeProducto'])->name('producto.store');
Route::get('/producto/crear',  [ProductController::class, 'createProducto'])->name('producto.create');
Route::get('/producto/update/{id}',  [ProductController::class, 'getEditProducto'])->name('producto.getEdit');
Route::put('/producto/update/{id}',  [ProductController::class, 'editProducto'])->name('producto.edit');
Route::get('/productos/{id}', [ProductController::class, 'destroyProducto'])->name('producto.destroy');
Route::get('/producto/{producto}', [ProductController::class, 'showProducto'])->name('producto.show');