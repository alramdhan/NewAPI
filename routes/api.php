<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KontakController;

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

Route::get('/kontak', [KontakController::class, 'index']);
Route::get('/kontak/{id}', [KontakController::class, 'show']);
Route::post('/kontak/store', [KontakController::class, 'store']);
Route::post('/kontak/update/{id}', [KontakController::class, 'update']);
Route::post('/kontak/delete/{id}', [KontakController::class, 'destroy']);
