<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\CatalogoProveedorRelProductoController;
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
    return view('welcome');
});

Route:: apiResource('/paises',CatalogoPaisController::class );

//Route:: apiResource('/proveedor_rel_producto', CatalogoProveedorRelProductoController::class );


Route::get('/proveedor_rel_producto', [CatalogoProveedorRelProductoController::class, 'index']);
Route::get('/proveedor_rel_producto/{id}/{id2}', [CatalogoProveedorRelProductoController::class, 'show']);
Route::post('/proveedor_rel_producto', [CatalogoProveedorRelProductoController::class, 'store']);
Route::put('/proveedor_rel_producto/{id}/{id2}', [CatalogoProveedorRelProductoController::class, 'update']);
Route::delete('/proveedor_rel_producto/{id}/{id2}', [CatalogoProveedorRelProductoController::class, 'destroy']);




