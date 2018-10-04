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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', ['as'=>'main', 'uses'=>'MainController@show']);

Route::get('/event', ['as'=>'event', 'uses'=>'EventController@show']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('events', 'EventsController@index')->name('events.index');
Route::get('events/{event}', 'EventsController@view')->name('event.view');

//Route::get('/events/{event}', ['as'=>'event', 'uses'=>'EventController@show']);



