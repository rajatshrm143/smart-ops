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

Route::get('/', 'ViewController@index');
Route::post('/add', 'ViewController@add')->name('add');
Route::post('/update/{id}', 'ViewController@update')->name('update');
Route::any('/delete/{id}', 'ViewController@delete')->name('delete');
