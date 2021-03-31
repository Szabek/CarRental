<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
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


Route::get('/', [CarController::class, 'index'])->name('main');

Auth::routes();

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/profile/create', [ProfileController::class, 'create'])->name('profiles.create');
Route::get('/profile/{user}/edit', [ProfileController::class, 'edit'])->name('profiles.edit');
Route::put('/profile/{user}', [ProfileController::class, 'update'])->name('profiles.update');

Route::get('/cars/create', [CarController::class, 'create'])->middleware(['auth'])->name('cars.create');
Route::post('/cars', [CarController::class, 'store'])->name('cars.store');
Route::get('/cars/{car}', [CarController::class, 'show'])->where('car',  '[0-9]+')->name('cars.show');

Route::post('cars/{car}/transactions', [TransactionController::class, 'store'])->name('transactions');
Route::put('cars/{car}/transactions', [TransactionController::class, 'returnCar'])->name('transactions');

