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

Route::resource('/','front\mainController');

Route::post('/s_mail','front\contactUsController@sendmail');
Route::resource('/contact_us','front\contactUsController');

Route::get('/thank_you',function(){
	return view('front.thank_you');
});



Route::get('/screeners/topLoved/{screenerName}','front\topLovedController@index');


//Route For Move To Screeners Details Table Page

//Route::get('/screeners/{stock_name}','front\stockController@index');
Route::resource('/screeners','front\screenerController');





//Route For Get Chart Of Specific Stock

Route::post('/screeners_get','front\chartController@getlivedata');
Route::get('/chart/{screener_name}/{stock_name}','front\chartController@index');







/*==================================================================================================================================*/


/* Admin Panel Routes */
Route::resource('/mx_ad_mstr','mx_ad_mstr\mainController');

Route::resource('/h__p_news','mx_ad_mstr\h__p_news\mainController');