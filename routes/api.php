<?php

use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::middleware('auth:api')->group(function () {
    // User management
    Route::get('/users', [AdminController::class, 'user']);
    Route::delete('/users/{id}', [AdminController::class, 'deleteuser']);

    // Food management
    Route::get('/food', [AdminController::class, 'foodmenu']);
    Route::get('/food/{id}', [AdminController::class, 'updatefood']);
    Route::put('/food/{id}', [AdminController::class, 'update']);
    Route::post('/food', [AdminController::class, 'uploadfood']);
    Route::delete('/food/{id}', [AdminController::class, 'deletefood']);

    // Reservation management
    Route::post('/reservations', [AdminController::class, 'reservation']);
    Route::get('/reservations', [AdminController::class, 'viewreservation']);

    // Chef management
    Route::get('/chefs', [AdminController::class, 'viewchef']);
    Route::post('/chefs', [AdminController::class, 'postchef']);
    Route::delete('/chefs/{id}', [AdminController::class, 'deletechef']);
    Route::get('/chefs/{id}', [AdminController::class, 'updatechef']);
    Route::put('/chefs/{id}', [AdminController::class, 'postupdatechef']);

    // Order management
    Route::get('/orders', [AdminController::class, 'orders']);
    Route::get('/orders/search', [AdminController::class, 'search']);
});



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
