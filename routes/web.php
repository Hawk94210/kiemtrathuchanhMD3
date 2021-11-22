<?php

use App\Http\Controllers\MarketController;
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

Route::get('/',[MarketController::class,'index'])->name('show.index');

Route::get('create',[MarketController::class,'create'])->name('show.create');

Route::post('create',[MarketController::class,'store'])->name('store');

Route::get('{id}/edit',[MarketController::class,'edit'])->name('show.edit');

Route::post('{id}/edit',[MarketController::class,'update'])->name('update');

Route::get('{id}/delete',[MarketController::class,'destroy'])->name('delete');

Route::get('search',[MarketController::class,'search'])->name('search');
