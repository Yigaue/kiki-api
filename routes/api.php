<?php

use App\Http\Controllers\StoriesController;
use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/stories','StoriesController@index');
Route::post('/stories', 'StoriesController@store');
Route::patch('stories/{story}', 'StoriesController@update');
Route::delete('/stories/{story}', 'StoriesController@destroy');
Route::get('story/{story}', 'storiesController@show');
