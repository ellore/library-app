<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/*****************************************     UserController     *****************************************************/
Route::get('home', ['as' => 'user_home', 'uses' => 'UserController@home']);
Route::get('accounts', ['as' => 'user_accounts', 'uses' => 'UserController@accounts']);
Route::get('wish_list', ['as' => 'user_wish_list', 'uses' => 'UserController@wish_list']);
Route::get('queued_books', ['as' => 'user_queued_books', 'uses' => 'UserController@queued_books']);
Route::get('contacts', ['as' => 'user_contacts', 'uses' => 'UserController@contacts']);
Route::get('lost_book', ['as' => 'user_lost_book', 'uses' => 'UserController@lost_book']);
Route::get('donate_book', ['as' => 'user_donate_book', 'uses' => 'UserController@donate_book']);
Route::get('login', ['as' => 'user_login', 'uses' => 'UserController@login']);
/**********************************************************************************************************************/

/*AdminController*/
Route::get('admin', ['as' => 'admin', 'uses' => 'AdminController@hello']);
Route::get('user', ['as' => 'user', 'uses' => 'UserController@hello']);
Route::get('admin/login', ['as' => 'adminlogin', 'uses' => 'AdminController@login']);
Route::post('admin/login', ['as' => 'adminlogin', 'uses' => 'AdminController@postlogin']);
Route::get('admin/logout', ['as' => 'adminlogout', 'uses' => 'AdminController@logout']);

Route::group(array('before'=>'auth.admin'),function()
{
    Route::get('test', ['as' => 'home', 'uses' => 'AdminController@abcd']);
});
