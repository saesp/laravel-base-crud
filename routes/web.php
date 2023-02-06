<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'home']);

Route::get('/saints/{id}', [MainController::class, 'show']);

Route::get('/saints/delete/{id}', [MainController::class, 'delete'])->name('saints.destroy');

Route::post('/saints/create', [MainController::class, 'create'])->name('saints.create');
Route::post('/saints/store', [MainController::class, 'store'])->name('saints.store');