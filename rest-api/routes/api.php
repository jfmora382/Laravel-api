<?php

use App\Http\Controllers\Api\AreaController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\PositionController;
use App\Http\Controllers\Api\LoanController;
use App\Http\Controllers\Api\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::prefix('v1')->group(function () {
    Route::apiResource('areas', AreaController::class);
    Route::apiResource('products', ProductController::class);
    Route::apiResource('positions', PositionController::class);
    Route::apiResource('loans', LoanController::class);
    Route::apiResource('employees', EmployeeController::class);
});
