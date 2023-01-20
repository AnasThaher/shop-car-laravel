<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('cars', [CarsController::class,'index'])->name('user');
Route::get('car/{id}', [CarsController::class,'getCarByIndex'])->name('user');
Route::post('login', [UserController::class,'login'])->name('login');
Route::post('register', [UserController::class,'register'])->name('register');
Route::post('order', [OrderController::class,'order'])->name('order');
