<?php

use App\Http\Controllers\MovieController;
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

Route::get('/', [MovieController::class,'index'])->name('movie.index');


Route::get('/movie/create', [MovieController::class,'create'])->name('movie.create');
Route::post('/movie', [MovieController::class,'store'])->name('movie.store');

Route::get('/movie/{id}', [MovieController::class,'show'])->name('movie.show');
