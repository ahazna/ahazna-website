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

Route::get('/', 'WelcomeController@index')->name('home');
Route::get('aboutus','AboutUsController@index')->name('aboutus');

Route::get('contactus', 'ContactUsController@index')->name('contactus');
Route::post('contactus', 'ContactUsController@store');

Route::get('about','AboutController@index')->name('about');
Route::get('services','ServicesController@index')->name('services');
Route::get('jobs','JobsController@index')->name('jobs');
Route::get('team','TeamController@index')->name('team');
Route::get('products','ProductsController@index')->name('products');
Route::get('projects','ProjectsController@index')->name('projects');
