<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CheckoutController;
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

Route::middleware('auth:api')->prefix('v1')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    // Route::get('/users', [UserController::class, 'index']);

    Route::apiResource('/authors', AuthorController::class);
    Route::apiResource('/books', BooksController::class);
    Route::apiResource('/checkout', CheckoutController::class);
    Route::apiResource('/users', UserController::class);
});

Route::get('/books', function (Request $request) {
    return $request->user()->toArray();
});

Route::get('/Jacob', function (Request $request) {
    return 'Jacob is very helpful';
});

Route::get('/Chase', function (Request $request) {
    return 'No, I dont need a Jacob Route';
});
