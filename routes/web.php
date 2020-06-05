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

/**
 * 
 * Páginas do Site
 * 
 */

Route::get('/', 'HomeController@index')->name('home');
Route::get('/questoes', 'HomeController@questoes')->name('questoes');
Route::get('/q1', 'HomeController@q1')->name('q1');
Route::get('/q2', 'HomeController@q2')->name('q2');