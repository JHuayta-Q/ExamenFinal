<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

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

Route::get('/productolist', [ProductoController::class, 'index'])->name('producto.index');

Route::get('/productoform', [ProductoController::class, 'form'])->name('producto.form');

Route::post('/productocreate', [ProductoController::class, 'create'])->name('producto.create');
