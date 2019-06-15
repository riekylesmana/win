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

Route::get('product', 'ProductController@index');
Route::get('product/export_excel', 'ProductController@export_excel');
Route::post('product/import_excel', 'ProductController@import_excel');
Route::get('file/upload', 'FileController@form')->name('file.form');
Route::get('file', 'FileController@index')->name('file.index');
Route::post('file/upload', 'FileController@upload')->name('file.upload');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
