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

Route::get('/', ['as'=>'main', 'uses'=>'MainController@show']);

Route::get('/event', ['as'=>'event', 'uses'=>'EventController@show']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('events', 'EventsController@index')->name('events.index');
Route::get('events/{event}', 'EventsController@view')->name('event.view');

Route::get('/create', 'EventsController@create')->name('events.create');
Route::post('/events', 'EventsController@store')->name('events.store');

Route::put('events/{event}', 'EventsController@edit')->name('events.update');
Route::get('events/{event}/edit', 'EventsController@update')->name('events.edit');


Route::post('/events/{event}', 'ParticipantController@connectLeave')->name('participate');
Route::delete('events/{event}', 'EventsController@delete')->name('events.delete');







Route::get('/ev', 'ParticipantController@test');



Route::get('/eve', 'EventsController@companies')->name('json');




