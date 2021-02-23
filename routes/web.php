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

Route::get('/', 'Front\LandingPage@index');

Route::get('/blog/{id}-{slug}' , 'Blog@view');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/create/blog' ,'Blog@create')->name('ceate.blog')->middleware('auth');
Route::post('/store/blog/' , 'BLog@store')->name('store.blog')->middleware('auth');
Route::get('/create/category' ,'Category@create')->name('ceate.category')->middleware('auth');
Route::post('/create/category' ,'Category@store')->name('ceate.store')->middleware('auth');
Route::get('/visitors/count' , 'Blog@ipList')->name('ip.list')->middleware(['auth','admin']);