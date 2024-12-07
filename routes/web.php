<?php

use App\Http\Controllers\PetController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PetController::class, 'index']);
Route::get('/pet/create', [PetController::class, 'create']);
Route::post('/pet', [PetController::class, 'store']);
Route::get('/pet/{id}', [PetController::class, 'show']);
Route::get('/pet/{id}/edit', [PetController::class, 'edit']);
Route::put('/pet/{id}', [PetController::class, 'update']);
Route::delete('/pet/{id}', [PetController::class, 'destroy']);
