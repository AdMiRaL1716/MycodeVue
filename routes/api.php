<?php

use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', [UserController::class, 'login']);
Route::post('logout', [UserController::class, 'logout'])->middleware('auth:sanctum');

Route::group(['prefix' => 'categories', 'middleware' => 'auth:sanctum'], function () {
    Route::get('categories', [CategoryController::class, 'index']);
    Route::post('add', [CategoryController::class, 'create']);
    Route::get('edit/{id}', [CategoryController::class, 'edit']);
    Route::post('update/{id}', [CategoryController::class, 'update']);
    Route::delete('delete/{id}', [CategoryController::class, 'delete']);
});
