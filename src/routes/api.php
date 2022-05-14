<?php

use App\Http\Controllers\instaPageController;
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

Route::get('/ts',function (){echo 'oi';});

Route::prefix('/insta')->controller(instaPageController::class)->group(function () {
    Route::post('/all', 'all');
    Route::post('/limit/{limit}', 'limit');
});
