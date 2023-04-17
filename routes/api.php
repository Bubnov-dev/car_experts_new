<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/brands', [\App\Http\Controllers\BrandController::class, 'all']);
Route::get('/tyreBrands', [\App\Http\Controllers\TyreBrandController::class, 'all']);
Route::post('/uploadFile', [\App\Http\Controllers\FileController::class, 'storeFile']);
Route::controller(\App\Http\Controllers\ReportController::class)->prefix('reports')
    ->group(function () {
        Route::post('', 'create');
        Route::put('', 'update');
        Route::put('/save', 'save');
        Route::get('', 'get');
    });
