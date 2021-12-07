<?php

use App\Http\Controllers\CompraController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\TipoProductoController;


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
// middleware(['auth:sanctum','verified'])->

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', HomeController::class);
Route::get('cursos',  [CursoController::class, 'index']);
Route::get('cursos/create',  [CursoController::class, 'create']);
Route::get('cursos/{curso}',  [CursoController::class, 'show']);

Route::get('/auth/redirect/{provider}', [SocialController::class, 'redirectToProvider']);
Route::get('/auth/callback/{provider}', [SocialController::class, 'handleProviderCallback']);

Route::get('geolocalizacion', function(){
    return view('geolocalizacion.index');
});
Route::resource('productos', ProductoController::class);
Route::resource('proveedors', ProveedorController::class);
Route::resource('tipoproductos', TipoProductoController::class);

Route::resource('compras', CompraController::class);


