<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

//Route::get('/users',[\App\Http\Controllers\UserController::class,'getAll']);
//Route::post('/users',[\App\Http\Controllers\UserController::class,'createUser']);

Route::get('/users', [UserController::class, 'getAll']);

Route::post('/users', [UserController::class, 'createUser']);

Route::get('/users/{id}', [UserController::class, 'getUserById']);

Route::put('/users/{id}', [UserController::class, 'updateUser']);

Route::delete('/users/{id}', [UserController::class, 'deleteUser']);

