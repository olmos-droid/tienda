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

//home localhost
Route::get('/', [MovieController::class,'index'])->name('movies.index');
//create item
Route::get('/movie/create', [MovieController::class,'create'])->name('movies.create');
//store/save item
Route::post('/movie', [MovieController::class,'store'])->name('movies.store');
//find by id
Route::get('/movie/{movie}', [MovieController::class,'show'])->name('movies.show');
//edit item
Route::get('/movie/{movie}/edit', [MovieController::class,'edit'])->name('movies.edit');

Route::post('/movie', [MovieController::class,'update'])->name('movies.update');