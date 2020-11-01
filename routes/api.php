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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->group(function() {

    Route::apiResource('contact', 'Api\ContactController')->except(['destroy']);

    Route::apiResource('company', 'Api\CompanyController')->only(['index','show']);

    Route::get('company/search/{name}', [
        'as' => 'company.search',
        'uses' => 'Api\CompanyController@search'
    ]);

    Route::apiResource('note', 'Api\NoteController')->only(['store']);

});





Route::group([

    'middleware' => 'api',
//    'namespace' => 'App\Http\Controllers',
    'prefix' => 'auth'

], function ($router) {

    Route::get('login', 'Api\AuthController@login')->name('login');
    Route::post('login', 'Api\AuthController@login');
    Route::get('logout', 'Api\AuthController@logout');
    Route::get('refresh', 'Api\AuthController@refresh');
    Route::get('me', 'Api\AuthController@me');

});
