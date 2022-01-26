<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use GuzzleHttp\Middleware;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/',[MovieController::class,'index'])->middleware(['auth'])->name('movies.index');
Route::post('/',[MovieController::class,'index'])->middleware(['auth'])->name('movies.index');
Route::get('/show/{movie}', [MovieController::class, 'show'])->middleware(['auth'])->name('movies.show');
Route::get('/create', [MovieController::class, 'create'])->middleware(['auth'])->name('movies.create');
Route::post('/create', [MovieController::class, 'create'])->middleware(['auth'])->name('movies.create');

Route::get('/edit/{movie}', [MovieController::class, 'edit'])->middleware(['auth'])->name('movies.edit');
Route::put('/edit/{movie}', [MovieController::class, 'update'])->middleware(['auth'])->name('movies.update');

Route::get('/addToCart/{movie}',[CartController::class, 'getAddToCart'])->Middleware(['auth'])->name('movies.getAddToCart');
Route::get('/addToCart/{movie}',[CartController::class, 'getAddToCart'])->Middleware(['auth'])->name('movies.getAddToCart');

Route::get('/shopping-cart',[CartController::class,'getCart'])->Middleware(['auth'])->name('movies.shoppingCart');

