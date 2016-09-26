<?php
use App\Http\Controllers;

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


Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

Route::get('/', 'BlogController@index');
Route::get('/create', 'BlogController@create');
Route::get('/view/{id}', 'BlogController@show');
Route::post('/create', 'BlogController@store');
Route::get('/view/{id}/edit', 'BlogController@edit');
Route::post('/view/{id}/edit', 'BlogController@update');
Route::get('/view/delete_post/{id}', 'BlogController@destroy');