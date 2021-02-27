<?php
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {

    Config::set('auth.defines', 'admin');
    Route::get('login', 'AdminAuthController@login');
    Route::post('login', 'AdminAuthController@doLogin');
    Route::get('forgot/password', 'AdminAuthController@forgot_password')->name('forgot_password');
    Route::post('forgot/password', 'AdminAuthController@forgot_password_post');
    Route::get('reset/password/{token}', 'AdminAuthController@reset_password');
    Route::post('reset/password/{token}', 'AdminAuthController@reset_password_final');

    Route::group(['middleware' => 'admin:admin'], function () {

        Route::resource('admin', 'AdminController');
        Route::delete('admin/destroy/all', 'AdminController@multi_delete');

        Route::resource('users', 'UsersController');
        Route::delete('users/destroy/all', 'UsersController@multi_delete');

        Route::resource('countries', 'CountryController');
        Route::delete('countries/destroy/all', 'CountryController@multi_delete');

        Route::resource('cities', 'CityController');
        Route::delete('cities/destroy/all', 'CityController@multi_delete');

        Route::resource('states', 'StateController');
        Route::delete('states/destroy/all', 'StateController@multi_delete');

        Route::resource('trademarks', 'TradeMarksController');
        Route::delete('trademarks/destroy/all', 'TradeMarksController@multi_delete');

        Route::resource('manufacturers', 'ManufacturersController');
        Route::delete('manufacturers/destroy/all', 'ManufacturersController@multi_delete');

        Route::resource('shipping', 'ShippingController');
        Route::delete('shipping/destroy/all', 'ShippingController@multi_delete');

        Route::resource('departments', 'DepartmentController');

        Route::resource('malls', 'MallsController');
        Route::delete('malls/destroy/all', 'MallsController@multi_delete');

        Route::resource('colors', 'ColorsController');
        Route::delete('colors/destroy/all', 'ColorsController@multi_delete');

        Route::resource('weights', 'WeightsController');
        Route::delete('weights/destroy/all', 'WeightsController@multi_delete');

        Route::resource('sizes', 'SizesController');
        Route::delete('sizes/destroy/all', 'SizesController@multi_delete');

        Route::resource('products', 'ProductsController');
        Route::delete('products/destroy/all', 'ProductsController@multi_delete');
        Route::post('products/search', 'ProductsController@product_search');
        Route::post('products/copy/{pid}', 'ProductsController@copy_product');
        Route::post('upload/image/{pid}', 'ProductsController@upload_file');
        Route::post('delete/image/', 'ProductsController@delete_file');
        Route::post('update/image/{pid}', 'ProductsController@update_product_image');
        Route::post('delete/product/image/{pid}', 'ProductsController@delete_main_image');
        Route::post('load/wight/size', 'ProductsController@prepare_weight_size');

        Route::get('/', function () {
            return view('admin.home');
        });

        Route::get('settings', 'SettingController@setting');
        Route::post('settings', 'SettingController@setting_save');

        Route::any('logout', 'AdminAuthController@logout')->name('logout');
    });

    Route::get('lang/{lang}', function ($lang) {
        session()->has('lang') ? session()->forget('lang') : '';
        $lang == 'ar' ? session()->put('lang', 'ar') : session()->put('lang', 'en');
        return back();
    });

});
