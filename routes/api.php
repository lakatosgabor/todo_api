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


Route::post('/addtodo', 'App\Http\Controllers\TodoController@create');

Route::get('/show', 'App\Http\Controllers\TodoController@show');

Route::get('/showbyid/{id}', 'App\Http\Controllers\TodoController@showbyid');

Route::put('/todoupdate/{id}', 'App\Http\Controllers\TodoController@todoupdate');

Route::delete('/tododelete/{id}', 'App\Http\Controllers\TodoController@tododelete');
