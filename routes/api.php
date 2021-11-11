<?php

use App\Http\Controllers\AuthorController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:api')->prefix('v1')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::apiResource('/authors', AuthorController::class);

    // Route::get('/authors/{author}', [AuthorController::class, 'show']
    // );
    // Route::get('/authors', [AuthorController::class, 'index']
    // );
});

// Route::get('/user', function (Request $request) {
//     return $request->user()->toArray();
// });

// Route::get('/test', function (Request $request) {
//     return 'Auth Passed';
// });

Route::get('/Jacob', function (Request $request) {
    return 'Jacob is very helpful';
});
