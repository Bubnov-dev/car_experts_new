<?php

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

Route::get('/pdf/{lang}/{id}', [\App\Http\Controllers\ReportController::class, 'getReportPdf']);

Route::get('/translate', [\App\Http\Controllers\ReportController::class, 'translate2']);
Route::get('/{lang}/{id}', [\App\Http\Controllers\ReportController::class, 'getReport']);
