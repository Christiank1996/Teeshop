<?php

use App\Http\Controllers\ProduktController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\WarenkorbController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('test', [TestController::class, 'test']);
Route::get('alleTeesorten', [ProduktController::class, 'getTeesorten']);
Route::post('getWarenkorb', [WarenkorbController::class, 'getWarenkorb']);
Route::post('addCart', [WarenkorbController::class, 'addCart']);
