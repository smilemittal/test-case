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

Route::get('/countries', \App\Http\Controllers\Api\ListCountryController::class);
Route::get('/tooltips', \App\Http\Controllers\Api\ListTooltipController::class);

Route::middleware(['auth:api'])->group(function () {
    Route::get('/users/me', function (Request $request) {
        return $request->user();
    })->name('users.show-authenticated-user');
});
