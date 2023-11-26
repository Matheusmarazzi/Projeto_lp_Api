<?php

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

use App\Http\Controllers\MoviesController;

Route::get('movies',
   [MoviesController::class,'apiIndex']);

Route::post('movies',
   [MoviesController::class,'apiStore']);

Route::put('movies/{m}',
   [MoviesController::class,'apiUpdate']);

Route::delete('movies/{id}',
   [MoviesController::class,'apiDelete']);

Route::get('movies/{m}',
   [MoviesController::class,'apiShow']);