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
Route::get('/', 'pageController@indexPage')->name('home');

Route::group(['prefix' => 'user'], function () {
	Route::group(['prefix' => 'page'], function () {

	});

});
Route::group(['prefix' => 'admin'], function () {

	Route::get('/', 'adminController@adminIndex')->name('homeadmin');
	Route::get('/profile', 'adminController@adminProfile')->name('adminProfile');

	Route::get('/product', 'adminController@insertRestaurantPage')->name('restaurantManagement');

	Route::group(['prefix' => 'slider'], function () {
		Route::get('/create', 'sliderController@createSlide')->name('create.Slide');
		Route::post('/create', 'sliderController@postSlide')->name('post.Slide');
		Route::get('/list', 'sliderController@listSlide')->name('list.Slide');
	});

});
Route::group(['prefix' => 'login'], function () {
	Route::get('/', 'loginController@loginIndex')->name('Login');
	Route::get('/create', 'loginController@createLogin')->name('create.Login');
	Route::post('/postcreate', 'loginController@postLogin')->name('post.Login');
});