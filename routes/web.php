<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::redirect('/','user');

Route::get('user', [UserController::class, 'index'])->name('user.index');
Route::get('user/create', [UserController::class, 'create'])->name('user.create');

Route::get('user/{id}',[UserController::class,'show'])->name('user.show');
Route::post('user',[UserController::class, 'store'])->name('user.store');
Route::delete('user/{id}',[UserController::class,'destroy'])->name('user.destroy');
Route::get('user/edit/{id}', [UserController::class,'edit'])->name('user.edit');
Route::put('user/{id}', [UserController::class,'update'])->name('user.update');




