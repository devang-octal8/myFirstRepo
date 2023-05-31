<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\BussinessController;
use App\Http\Controllers\LocationController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Bussiness---

Route::get('bussinesses',[BussinessController::class,'index'])->name('bussinesses.index')->middleware('auth');

Route::get('bussinesses/form',[BussinessController::class,'create'])->name('bussinesses.create');

Route::post('bussinesses',[BussinessController::class,'store'])->name('bussinesses.store');

Route::get('bussinesses/{bussiness}/show',[BussinessController::class,'show'])->name('bussinesses.show');

Route::delete('bussinesses/{bussiness}',[BussinessController::class,'destroy'])->name('bussinesses.destroy');

Route::get('bussinesses/{bussiness}',[BussinessController::class,'edit'])->name('bussinesses.edit');

Route::put('bussiness/{bussiness}',[BussinessController::class,'update'])->name('bussinesses.update');


// Locations---
Route::get('locations/index',[LocationController::class,'index'])->name('locations.index')->middleware('auth');

Route::get('locations',[LocationController::class,'create'])->name('locations.create');

Route::post('locations',[LocationController::class,'store'])->name('locations.store');

// Route::get('locations/{location}/show',[LocationController::class,'show'])->name('locations.show');

Route::delete('locations/{location}',[LocationController::class,'destroy'])->name('locations.destroy');

Route::get('locations/{location}',[LocationController::class,'edit'])->name('locations.edit');

Route::put('locations/{location}',[LocationController::class,'update'])->name('locations.update');

