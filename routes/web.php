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


Route::get('/', [App\Http\Controllers\BrokerController::class, 'homeScreen']);

Route::post('/filter', [App\Http\Controllers\FilterController::class, 'index']);
Route::get('/area-corretor', [App\Http\Controllers\BrokerController::class, 'brokerArea'])->middleware('auth')->name('broker-area');


Route::get('/login-corretor', [App\Http\Controllers\AuthController::class, 'login'])->name('login'); //retorna a view de login
Route::post('/verify-login', [App\Http\Controllers\AuthController::class, 'verifyLogin']);            //verifica o login do corretor

Route::post('/add-property', [App\Http\Controllers\BrokerController::class, 'addProperty'])->middleware('auth');
Route::delete('/property/{id}', [App\Http\Controllers\BrokerController::class, 'deleteProperty'])->middleware('auth');
