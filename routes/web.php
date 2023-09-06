<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Productos\ProductosController;
use App\Http\Controllers\Menu\MenuController;
use App\Http\Controllers\Ventas\VentasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('menu', [MenuController::class,'index'])->name('index.menu');
Route::get('mostrar', [ProductosController::class,'index'])->name('index.producto');
Route::get('crear', [ProductosController::class,'crear'])->name('crear.producto');
Route::post('guardar', [ProductosController::class, 'guardar'])->name('guardar.producto');
Route::get('editar/{producto}', [ProductosController::class,'editar'])->name('editar.producto');
Route::put('modificar/{id}', [ProductosController::class,'modificar'])->name('modificar.producto');
Route::delete('eliminar/{id}', [ProductosController::class,'eliminar'])->name('eliminar.producto');
Route::get('consultar', [ProductosController::class,'consultar'])->name('consultar.producto');
Route::get('venta', [VentasController::class,'index'])->name('index.venta');
Route::get('generar', [VentasController::class,'crear'])->name('crear.venta');
Route::post('vender', [VentasController::class, 'guardar'])->name('guardar.venta');
