<?php

use App\Http\Controllers\ProsesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::post('ProsesBeli', [ProsesController::class, 'ProsesBeli'])->name('ProsesBeli');

Route::get('billing', function () {
  return view('billing');
});

Route::post('cekPembayaran', [ProsesController::class, 'cekPembayaran'])->name('cekPembayaran');