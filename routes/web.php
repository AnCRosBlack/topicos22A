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

Route::get('/', function () {
    return view('auth.login');
	// return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/usuarios',  [UserController::class, 'user'])->name('usuarios.index');
Route::get('/proveedor',  [ProviderController::class, 'provider'])->name('proveedor');
Route::get('/producto',  [ProductController::class, 'product'])->name('producto');
Route::get('/cliente',  [ClientController::class, 'client'])->name('cliente');


Route::post('/usuarios/crear',  [UserController::class, 'store'])->name('usuarios.store');
Route::get('/usuarios/crear',  [UserController::class, 'createuser'])->name('usuarios.create');
Route::post('/proveedor/crear',  [ProviderController::class, 'createprovider'])->name('proveedor.create');
Route::post('/producto/crear',  [ProductController::class, 'createproduct'])->name('producto.create');
Route::post('/cliente/crear',  [ClientController::class, 'createclient'])->name('cliente.create');

Route::get('/usuarios/update/{id}',  [UserController::class, 'getUpdate'])->name('usuario.update');
Route::post('/usuarios/update/{id}',  [UserController::class, 'update'])->name('usuarios.update');


// Route::get('/usuarios/crear',  [UserController::class, 'createuser'])->name('usuarios.create');
Route::post('/proveedor/crear',  [ProviderController::class, 'createprovider'])->name('proveedor.create');
Route::post('/producto/crear',  [ProductController::class, 'createproduct'])->name('producto.create');
Route::post('/cliente/crear',  [ClientController::class, 'createclient'])->name('cliente.create');

Route::get('/usuarios/{id}', [UserController::class, 'delete'])->name('usuario.delete');

Route::get('/usuario/{user}', [UserController::class, 'show'])->name('usuarios.show');


Auth::routes();


// Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');


Route::post('registrarUsuario',  [RegisterController::class, 'create']);

Route::get('/perfil',  [UsuarioController::class, 'getUsuario']);

Route::post('registrarProducto',  [ProductoController::class, 'create']);

// Route::get('/producto',  [UsuarioController::class, 'getProducto']);

Route::get('/acerca-de', function () {
    return view('acerca-de');
});





Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});


Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});


