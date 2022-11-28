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

Route::group([

    'middleware' => 'api',
    'prefix' => 'v1'

],
function ($router) {

    Route::post('accounts/login', 'App\Http\Controllers\AuthController@login');
    Route::post('accounts/logout', 'App\Http\Controllers\AuthController@logout');
    Route::post('accounts/refresh', 'AuthCoApp\Http\Controllers\AuthControllerntroller@refresh');
    Route::post('accounts/me', 'App\Http\Controllers\AuthController@me');
    Route::post('accounts/register', 'App\Http\Controllers\AuthController@register');
    Route::get('gift/initialfilter', 'App\Http\Controllers\FilterController@index');
    Route::get('filter/{filter}', 'App\Http\Controllers\FilterController@getGiftByFilter');
});

