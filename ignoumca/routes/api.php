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
Route::get('/greeting', function () {
    return 'Hello World';
});

Route::post('/insert','surveycontroller@insert');
Route::post('/productinsert','surveycontroller@productinsert');
//Route::post('/productinsert','productcontroller@productinsert');
Route::get('/show','surveycontroller@show');
Route::get('/productinfo','surveycontroller@productinfo');
//Route::get('/productinfo','productcontroller@productinfo');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
