<?php

use App\Http\Controllers\Notascontroller;
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

Route::get('/notas', [Notascontroller::class, 'index'])->name('notas');;

Route::post('/notas', [Notascontroller::class,'store'])->name('notas');

Route::get('/', [Notascontroller::class, 'indexVerNotas']);

Route::get('/vernotas', [Notascontroller::class, 'indexVerNotas'])->name('verNotas');

// Route::get('/index/{id}', [Notascontroller::class,'show'])->name('notas-edit');

Route::patch('/notas/{id}', [Notascontroller::class,'update'])->name('notas-update');

Route::delete('/notas/{id}', [Notascontroller::class,'destroy'])->name('notas-destroy');

