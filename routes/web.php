<?php

use App\Http\Controllers\UserController;
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

Route::get('/next', function () {
    return 'hik';
});

Route::group(['prefix' => 'info'], function() {
    Route::get('/server', [UserController::class, 'getPhpInfo']);
    Route::get('/client', [UserController::class, 'getClientInfo']);
    Route::get('/database', [UserController::class, 'getDatabaseInfo']);
});