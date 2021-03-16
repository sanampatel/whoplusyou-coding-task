<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CarController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\StreetController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
	return $request->user();
});

Route::get('/ping', function () {
	return response(['ping' => 'ping']);
});

Route::get('/persons', [PersonController::class, 'index']);
Route::get('/cars', [CarController::class, 'index']);
Route::get('/streets', [StreetController::class, 'index']);
Route::get('/persons', [PersonController::class, 'index']);
