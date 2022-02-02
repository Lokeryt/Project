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

Route::get('/', function () {
    return view('index');
})->name('main');

Route::get('/records', 'App\Http\Controllers\PostsController@allData')->name('records');

Route::get('/records/{sort}', 'App\Http\Controllers\PostsController@allDataSorted')->name('records-sorted');

Route::get('/record/{id}', 'App\Http\Controllers\PostsController@get')->name('record');

Route::post('/submit', 'App\Http\Controllers\PostsController@submit')->name('main-submit');

Route::get('/record/{id}/change', 'App\Http\Controllers\PostsController@change')->name('change');

Route::post('/record/{id}/change', 'App\Http\Controllers\PostsController@update')->name('change-submit');

Route::get('/record/{id}/delete', 'App\Http\Controllers\PostsController@delete')->name('delete');

