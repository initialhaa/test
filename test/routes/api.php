<?php


use Illuminate\Routing\Route;
use App\Http\Controllers\Api\RiskEventController;
use App\Http\Controllers\Api\KejadianRisikoController;
use App\Http\Controllers\RiskEventController as ControllersRiskEventController;

Route::get('/', [KejadianRisikoController::class, 'index']);

Route::post('/1', [RiskEventController::class, 'store']);
Route::get('/2', [RiskEventController::class, 'index']);
