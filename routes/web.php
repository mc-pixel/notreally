<?php

use Illuminate\Support\Facades\Route;
use Spatie\Health\Http\Controllers\HealthCheckResultsController;

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

Route::get('/country_index', [\App\Http\Controllers\CountryController::class, 'index'])->name('country_index');
Route::get('/country_create', [\App\Http\Controllers\CountryController::class, 'create'])->name('country_create');
Route::post('/country_store', [\App\Http\Controllers\CountryController::class, 'store'])->name('country_store');

Route::get('/bar_index', [\App\Http\Controllers\BarController::class, 'index'])->name('bar_index');
Route::get('/bar_create', [\App\Http\Controllers\BarController::class, 'create'])->name('bar_create');
Route::post('/bar_store', [\App\Http\Controllers\BarController::class, 'store'])->name('bar_store');

Route::get('beer_index', [\App\Http\Controllers\BeerController::class, 'index'])->name('beer_index');
Route::get('beer_create', [\App\Http\Controllers\BeerController::class, 'create'])->name('beer_create');
Route::post('beer_store', [\App\Http\Controllers\BeerController::class, 'store'])->name('beer_store');

Route::get('health', HealthCheckResultsController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
