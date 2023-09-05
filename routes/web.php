<?php

use App\Http\Controllers\PersonasController;
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


route::get('/',[PersonasController::class,'index'])->name('personas.index');
route::get('/create',[PersonasController::class,'create'])->name('personas.create');
route::post('/store',[PersonasController::class,'store'])->name('personas.store');
route::get('/edit/{id}',[PersonasController::class,'edit'])->name('personas.edit');
route::put('/update/{id}',[PersonasController::class,'update'])->name('personas.update');
route::get('/show/{id}',[PersonasController::class,'show'])->name('personas.show');
route::delete('/destroy/{id}',[PersonasController::class,'destroy'])->name('personas.destroy');