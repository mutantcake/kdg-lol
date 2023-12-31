<?php

use App\Http\Controllers\registerController;
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
    return view('accueil');
})->name('accueil');

Route::get('/reservations', function () {
    return view('reservations');
})->name('reservations');

Route::get('admin',[registerController::class,'adminRegister']);
Route::get('manager',[registerController::class,'managerRegister']);
Route::get('client',[registerController::class,'clientRegister']);
