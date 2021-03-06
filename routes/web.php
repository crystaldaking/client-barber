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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/quene', function () {
    return view('quene.index');
});

Route::resource('quene',\App\Http\Controllers\QueneController::class);
Route::resource('clients',\App\Http\Controllers\ClientsController::class);
Route::resource('users',\App\Http\Controllers\UserController::class);
