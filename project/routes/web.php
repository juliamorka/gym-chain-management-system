<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

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

Route::get('/schedule', function () {
    return view('schedule');
})->name('schedule');

Route::get('/reservations', function () {
    return view('reservations');
})->name('reservations');

/*Route::get('/supplies', function () {
    return view('supplies');
})->name('supplies');*/

Route::get('/reports', function () {
    return view('reports');
})->name('reports');


Route::get('/details',[\App\Http\Controllers\DetailController::class,'details'])->name('details');

Route::get('/supplies',[\App\Http\Controllers\SuppliesController::class,'supplies'])->name('supplies');

Route::get('register', [RegisterController::class, 'create'])
    ->middleware(['auth', 'verified'])->name('register');

Route::post('register', [RegisterController::class, 'store'])->name('register.store');
