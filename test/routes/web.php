<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RiskEventController;
use App\Http\Controllers\Api\KejadianRisikoController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [KejadianRisikoController::class, 'index']);

Route::post('/1', [RiskEventController::class, 'store']);
Route::get('/2', [RiskEventController::class, 'index']);