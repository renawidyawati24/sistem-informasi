<?php

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


Route::resource('pegawais', App\Http\Controllers\API\PegawaiAPIController::class);

Route::resource('jabatans', App\Http\Controllers\API\JabatanAPIController::class);

Route::resource('laporans', App\Http\Controllers\API\LaporanAPIController::class);