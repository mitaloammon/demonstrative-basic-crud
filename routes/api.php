<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IntentionController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AddressController;

// Endpoint responsável pelas rotas de Intenção
Route::resource("/intentions", IntentionController::class);

// Endpoint responsável pelas rotas de Produto
Route::put('/products/alterar/{id}', [ProductsController::class, 'update']);
Route::delete('/products/{id}', [ProductsController::class, 'destroy']);

// Endpoint responsável pelas rotas de Endereço
Route::put('/address/update/{id}', [AddressController::class, 'update']);
Route::delete('/address/{id}', [AddressController::class, 'destroy']);
