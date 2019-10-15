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

Route::get('/', function () {
    return view('welcome');
});

Route::get('kontak', 'kontakController@index')->name("home");
Route::get('kontak/{id}/details', 'kontakController@getById')->name("getbyid");
Route::get('kontak/new', 'kontakController@create')->name("create_kontak");
Route::post('kontak/new', 'kontakController@add')->name("add_kontak");
Route::post('kontak/{id}/edit', 'kontakController@update')->name("update_kontak");
Route::get('kontak/{id}/edit', 'kontakController@edit')->name("edit_kontak");
Route::get('kontak/{id}/delete', 'kontakController@delete')->name("delete_kontak");
Route::get('kontak/search', 'kontakController@search')->name("search_kontak");



