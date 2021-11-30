<?php

use App\Http\Controllers\Api\ApiGalleryController;
use App\Http\Controllers\Api\ApiUserController;
use Illuminate\Support\Facades\Artisan;
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

Route::post('/register', [ApiUserController::class, 'register']);
Route::post('/login', [ApiUserController::class, 'login']);
Route::get('/user', [ApiUserController::class, 'index']);
Route::get('/user/{id}', [ApiUserController::class, 'show']);
Route::get('/gallery', [ApiGalleryController::class, 'index']);
Route::get('/gallery/{id}', [ApiGalleryController::class, 'show']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', function () {
        return auth()->user();
    });
    Route::post('/gallery', [ApiGalleryController::class, 'store']);
    Route::post('/gallery/{id}', [ApiGalleryController::class, 'update']);
    Route::delete('/gallery/{id}', [ApiGalleryController::class, 'destroy']);
});