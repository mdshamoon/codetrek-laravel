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

//     return view('question');
// });
Route::post('/', 'QuestionController@store');
Route::get('/', 'QuestionController@index');

// Route::get('/', function()
// {
// 	return redirect('/index');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/new-question', 'QuestionController@create')->middleware('auth');;

