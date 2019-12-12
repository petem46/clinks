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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('subjects', 'SubjectsController');
Route::resource('topics', 'TopicsController');
Route::get('/topics/link/{id}', 'TopicsController@link');
Route::get('/topics/clink/{id}/{clinkid}', 'TopicsController@clink');

