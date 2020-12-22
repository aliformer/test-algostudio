<?php

use App\Http\Controllers\ItemController;
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
    return view('layouts.app');
});
Route::delete('/barang/{id}', [ItemController::class, 'destroy']);
Route::get('/barang', [ItemController::class, 'index'])->name('barang');
Route::post('/barang', [ItemController::class, 'store'])->name('barang.tambah');
Route::put('/barang/{id}', [ItemController::class, 'update']);
