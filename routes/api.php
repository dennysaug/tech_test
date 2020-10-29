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

Route::apiResource('contact', 'Api\ContactController');

Route::apiResource('company', 'Api\CompanyController')->only(['index','show']);

Route::get('company/search/{name}', [
    'as' => 'company.search',
    'uses' => 'Api\CompanyController@search'
]);

Route::apiResource('note', 'Api\NoteController')->only(['store']);

Route::get('api_token', 'Api\ApiTokenController@update');

