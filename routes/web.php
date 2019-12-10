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


//Route Of Create Scan Or Create Screener
Route::resource('/createscan','front\createScanController');

//Route Of Main Screener Page
Route::resource('/screeners','front\screenerController');

//Route Of Screener Second Detail Page
Route::get('/screeners/topLoved/{screenerName}','front\topLovedController@index');
Route::get('/screeners/candleStick/{screenerName}','front\CandleStickController@index');
Route::get('/screeners/rangeBreakout/{screenerName}','front\RangeBreakoutController@index');
Route::get('/screeners/builshScan/{screenerName}','front\BuilshScanController@index');




//Route For Get Chart Of Specific Stock

Route::post('/screeners_get','front\chartController@getlivedata');
//Route::get('/chart/{screener_name}/{stock_name}','front\chartController@index');
Route::get('/chart/','front\chartController@index');







/*==================================================================================================================================*/


/* Admin Panel Routes */
Route::resource('/mx_ad_mstr','mx_ad_mstr\mainController');

Route::resource('/h__p_news','mx_ad_mstr\h__p_news\mainController');