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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/news', 'NewsController@News');

Route::get('/review_smartphone', 'ReviewSmartphoneController@Review_Smartphone');

Route::get('/review_smartphone_iphoneX', 'ReviewSmartPhoneController@Review_IphoneX');

Route::get('/review_smartphone_galaxyS8', 'ReviewSmartPhoneController@Review_Samsung');

Route::get('/review_smartphone_lumia', 'ReviewSmartPhoneController@Review_Lumia');

Route::get('/news_smartphone_razerPhone', 'NewsController@News_Razer');

Route::get('/news_smartphone_xiaoMi4A', 'NewsController@News_Xiaomi');

Route::get('/news_smartphone_iphoneX', 'NewsController@News_IphoneX');

Route::get('/TipsnTrick_GuideToBuy', 'TipsnTrickController@GuideToBuy');

Route::get('/TipsnTrick_Maintanance', 'TipsnTrickController@Maintanance');