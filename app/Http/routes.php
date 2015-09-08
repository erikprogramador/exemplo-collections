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

Route::get('/', [
	'as' => 'person.index',
	'uses' => 'PersonController@index'
]);

Route::get('/where', [
	'as' => 'person.allWhere',
	'uses' => 'PersonController@allWhere'
]);

Route::get('/lists', [
	'as' => 'person.allLists',
	'uses' => 'PersonController@allLists'
]);

Route::get('/group', [
	'as' => 'person.group',
	'uses' => 'PersonController@group'
]);