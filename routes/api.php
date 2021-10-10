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


// General API check password
Route::group(['middleware' => ['api', 'checkPassword', 'changeLanguage'], 'namespace' => 'Api'], function () {

    Route::post('get-country', 'CountryController@index');

    // Admin and user API login
    Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
        Route::post('login', 'AuthController@login');
        Route::post('logout', 'AuthController@logout')->middleware(['authGuardAPI:admin-api']);
        //invalidate token security side

        //broken access controller user enumeration
    });

    // User login
    Route::group(['prefix' => 'user','namespace'=>'User'],function (){
        Route::post('login','AuthController@Login') ;
    });

    Route::group(['prefix' => 'user', 'middleware' => 'authGuardAPI:user-api'], function () {
        Route::post('profile', function () {
            return  \Auth::user(); // return authenticated user data
        });

    });
});

