<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\UserController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/login', [userController::class, 'login']);
Route::post('/register', [userController::class, 'register']);

Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class,'store']);
Route::get('/users/{id}', [UserController::class,'show']); 
Route::post('/users/{id}', [UserController::class,'update']);
Route::delete('/users/{id}', [UserController::class,'destroy']);
