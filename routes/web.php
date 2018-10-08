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

Route::group(['namespace' => 'frontend', 'as' => 'frontend.'], function () {

    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('news', 'NewsController', ['only' => ['index','show']]);
    Route::resource('contact-us', 'ContactUsController', ['only' => ['index', 'create', 'store']]);

});

Route::group(['prefix' => 'backend', 'namespace' => 'backend', 'as' => 'backend.'], function(){
    Route::get('/', 'DashboardController@index')->name('dashbosrd');
    Route::resource('news', 'NewsController');
});

