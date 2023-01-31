<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\WelcomeController;

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

Route::redirect('/', '/api/welcome');

Route::get('/welcome', [WelcomeController::class, 'index']);

Route::controller(AuthController::class)->group(function () {
    // Route::get('/auth', 'index');
    Route::post('/auth', 'index');
});

Route::get('/products', [ProductsController::class, 'index']);
