<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['namespace' => 'App\Http\Controllers\API\V1', 'prefix' => 'v1'], function(){
    Route::controller(RegisterController::class)->group(function(){
        Route::post('register', 'register');
        Route::post('login', 'login');
    });

    Route::middleware('auth:sanctum')->group(function () {
        Route::apiResource('category', CategoryController::class);
        Route::apiResource('static-page', StaticPageController::class); 
    });
});
