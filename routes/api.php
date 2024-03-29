<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PetitionController;
use App\Http\Resources\PetitionCollection;
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

Route::apiResource('/petitions', PetitionController::class);

Route::resource('/authors', AuthorController::class)->only([
    'index', 'show'
]);
//if need specific route methods or actions
//Route::resource('/petitions', PetitionController::class)->only([
//    'index', 'store'
//]);
