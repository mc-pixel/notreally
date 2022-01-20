<?php

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

Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'show']);

Route::get('/country.index', [\App\Http\Controllers\CountryController::class, 'index']);
Route::get('/country.create', [\App\Http\Controllers\CountryController::class, 'create']);

Route::get('/bar_index', [\App\Http\Controllers\BarController::class, 'index']);
Route::get('/bar.create', [\App\Http\Controllers\BarController::class, 'create']);

Route::get('beer.index', [\App\Http\Controllers\BeerController::class, 'index']);
Route::get('beer.create', [\App\Http\Controllers\BeerController::class, 'create']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
