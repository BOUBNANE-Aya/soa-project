<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ClientController;
use App\Http\Controllers\API\ProduitController;
use App\Http\Controllers\API\FactureController;

// CLIENT API ROUTES
Route::prefix('clients')->group(function () {
    Route::get('/', [ClientController::class, 'index']);
    Route::post('/store', [ClientController::class, 'store']);
    Route::get('/{id}', [ClientController::class, 'show']);
    Route::put('/update/{id}', [ClientController::class, 'update']);
    Route::delete('/delete/{id}', [ClientController::class, 'destroy']);
});

// PRODUCT API ROUTES
Route::prefix('products')->group(function () {
    Route::get('/', [ProduitController::class, 'index']);
    Route::post('/store', [ProduitController::class, 'store']);
    Route::get('/{id}', [ProduitController::class, 'show']);
    Route::put('/update/{id}', [ProduitController::class, 'update']);
    Route::delete('/delete/{id}', [ProduitController::class, 'destroy']);
});

// FACTURE API ROUTES
Route::prefix('factures')->group(function () {
    Route::get('/', [FactureController::class, 'index']);
    Route::post('/store', [FactureController::class, 'store']);
    Route::get('/{id}', [FactureController::class, 'show']);
    Route::put('/update/{id}', [FactureController::class, 'update']);
    Route::delete('/delete/{id}', [FactureController::class, 'destroy']);
});