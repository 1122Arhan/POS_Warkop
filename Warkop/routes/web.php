<?php

use App\Http\Controllers\MejaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



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
    return view('/Auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/meja', [MejaController::class, 'index']);
Route::get('/meja/form/', [MejaController::class, 'create']);
Route::post('/meja/store/', [MejaController::class, 'store']);
Route::get('/meja/edit/{id}', [MejaController::class, 'edit']);
Route::put('/meja/{id}', [MejaController::class, 'update']);
Route::delete('/meja/{id}', [MejaController::class, 'destroy']);
