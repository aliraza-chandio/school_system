<?php

use Illuminate\Support\Facades\Route;
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

  
Route::resource('teachers', 'TeacherController');

Route::get('/','HomeController@index');
Route::get('/dashboard','HomeController@dashboard');
Route::get('/dashboard2','HomeController@dashboard2');

// for Classes
Route::get('/classes','ClassController@index');
Route::get('/class/create','ClassController@create');
Route::post('/class/store','ClassController@store');
Route::get('/class/{class_id}','ClassController@show');

// Route::get('/faq-list',  ['as' => 'faq','uses' => 'FaqController@index']);

Auth::routes();
