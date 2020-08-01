<?php
Route::group(['prefix' => 'admin', 'namespace'=>'Admin'], function () {

    Config::set('auth.defines', 'admin');
    Route::get('login','AdminAuthController@login');
    Route::post('login','AdminAuthController@doLogin');
    Route::get('forgot/password','AdminAuthController@forgot_password')->name('forgot_password');
    Route::post('forgot/password','AdminAuthController@forgot_password_post');
    Route::get('reset/password/{token}','AdminAuthController@reset_password');
    Route::post('reset/password/{token}','AdminAuthController@reset_password_final');
    Route::group(['middleware' => 'admin:admin'], function () {

        Route::get('/', function () {
            return view('admin.home');
        });

        Route::any('logout','AdminAuthController@logout')->name('logout');
    });
});
