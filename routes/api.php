<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StoreModelController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//для авторизации
Route::middleware('throttle:api')->controller(AuthController::class)->group(function () {
    Route::post('register', 'register');
    Route::post('login','login');
    Route::middleware('auth:sanctum')->get('logout','logout');
});


//Список заведений (магазинов) Store
Route::controller(StoreModelController::class)->group(function () {

});
