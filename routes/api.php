<?php

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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

//Route::resource('categoria', 'IndexController');
Route::get('categoria', 'IndexController@show');

Route::get('add', 'IndexController@store');

Route::get('getImages', 'IndexController@getImages');
//Route::get('image/{filename}',PhotoController @image);
Route::get('textInicio', 'IndexController@textInicio');