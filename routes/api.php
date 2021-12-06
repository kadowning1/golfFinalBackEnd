<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\GolferController;

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

    Route::get('/logout', [UserController::class, 'logout']);

    //group functions
    // Route::post('/joingroup', [GroupController::class, 'join']);
    Route::post('/creategroup', [GroupController::class, 'create']);


    //team functions
    Route::post('/submitteam', [TeamController::class, 'create']);
    Route::post('/addgolfer', [GolferController::class, 'addToTeam']);
    Route::post('/removegolfer', [GolferController::class, 'removeFromTeam']);
    Route::get('/getteam', [GolferController::class, 'show']);
    // Route::apiResource('/users', UserController::class);
});

Route::post('/register', [UserController::class, 'register']);
