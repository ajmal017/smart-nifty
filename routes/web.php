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

// Route::get('/', function () {
//     return view('welcome');
// });

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/','front\mainController');

Route::post('/s_mail','front\contactUsController@sendmail');
Route::resource('/contact_us','front\contactUsController');

Route::get('/thank_you',function(){
	return view('front.thank_you');
});



/*==================================================================================================================================*/


/* Admin Panel Routes */
Route::resource('/mx_ad_mstr','mx_ad_mstr\mainController');

Route::resource('/h__p_news','mx_ad_mstr\h__p_news\mainController');