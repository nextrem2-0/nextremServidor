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
//Route::get('image/{filename}',PhotoController @image);
Route::get('categorias', 'IndexController@getCategorias');

Route::get('addCategoria', 'IndexController@store');

Route::get('images', 'IndexController@getImages');

Route::get('textInicio', 'IndexController@getTextInicio');

Route::get('deportes', 'IndexController@getDeportes');

Route::get('deportes/{deporte}/eventos', 'IndexController@getEventosOfSport');

Route::post('register', 'UserController@register');

Route::post('login', 'UserController@login');

Route::group(['middleware' => ['jwt.verify']], function () {
    //Route::get('userLogged', 'UserController@getUsusarioAutenticado');

    Route::post('logout', 'UserController@logout');
});
