<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SaleController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\StockController;
use App\Http\Controllers\Api\IncomeController;

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
Route::middleware('auth.apikey')->group(function () {
    Route::get('/sales', [SaleController::class, 'index']);
    Route::get('/orders', [OrderController::class, 'index']);
    Route::get('/stocks', [StockController::class, 'index']);
    Route::get('/incomes', [IncomeController::class, 'index']);
});
