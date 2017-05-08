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

Route::group(['middleware' => ['web']], function(){

		Route::get('/', 'staticPagesController@getIndex');
		Route::get('about', 'staticPagesController@getAbout');
		Route::get('programmes', 'staticPagesController@getProgrammes');	
		Route::get('event', 'staticPagesController@getEvents');
		Route::get('portfolio', 'staticPagesController@getPortfolio');
		Route::get('gallery', 'staticPagesController@getGallery');
		Route::get('contact', 'staticPagesController@getContact');


		//Custom Routes for event details
		Route::get('event/{details}', ['uses'=>'staticPagesController@getEventDetails', 'as' =>'static_pages.eventdetails'])->where('details', '[\w\d\-\_]+');


		Route::resource('events', 'eventController');
		Route::resource('gallerys', 'galleryController');
		Route::resource('mains', 'mainController');
		Route::resource('slides', 'slideController');
		Route::resource('homes', 'adminHomeController');


});


Auth::routes();

Route::get('/admin', 'adminHomeController@index');
