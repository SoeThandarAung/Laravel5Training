<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','WelcomeController@index');
 

// Route::get('/',[
//  	'as' => 'home',
//  	'uses' => 'WelcomeController@index'
// ]);
Route::resource('lists','ListsController');
Route::controllers(['lists' => 'ListsController']);
Route::get('blog/category/{category?}','BlogController@category');
Route::get('blog/catgory/{category}/{subcategory}','BlogController@category');
