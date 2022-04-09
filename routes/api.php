<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UploadController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/create-account', [AuthController::class, 'createAccount']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/upload', [UploadController::class, 'upload']);
Route::get('/categories', [CategoryController::class, 'getList']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', [AuthController::class, 'userData']);
    Route::post('/sign-out', [AuthController::class, 'logout']);
    Route::post('/category-create', [CategoryController::class, 'create']);
});
