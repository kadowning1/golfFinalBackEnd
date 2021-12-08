<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\GolferController;
use App\Http\Controllers\DeadlineController;

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

    //user functions
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/logout', [UserController::class, 'logout']);

    //group functions
    Route::post('/joingroup', [GroupController::class, 'join']);
    Route::post('/creategroup', [GroupController::class, 'create']);
    Route::get('/group', [GroupController::class, 'index']);


    //team functions
    Route::post('/submitteam', [TeamController::class, 'create']);
    Route::get('/getteam', [TeamController::class, 'show']);
    Route::post('/addgolfer', [GolferController::class, 'addToTeam']);
    Route::post('/removegolfer', [GolferController::class, 'removeFromTeam']);

    //golfer function to show golfers
    Route::get('/getgolfer', [GolferController::class, 'show']);

    //deadline functions
    // Route::get('/startdeadline', [DeadlineController::class, 'start']);
    // Route::get('/endeadline', [DeadlineController::class, 'end']);
});

Route::post('/register', [UserController::class, 'register']);
