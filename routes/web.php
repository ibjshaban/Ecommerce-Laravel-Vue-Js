<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => 'Maintenance'], function () {


    Route::get('/', function () {
        return view('style.home');
    });
    Route::get('/paytabs_payment', 'PaytabsController@index')->name('Paytabs.index');
    Route::post('/paytabs_response', 'PaytabsController@response')->name('Paytabs.result');
});

Route::get('maintenance', function () {
    if (setting()->status == 'open'){
        return redirect('/');
    }
    return view('style.maintenance');
});
