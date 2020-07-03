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

Route::get('/', 'PageController@home');
Route::get('/visi-misi', 'PageController@visimisi');
Route::get('/sejarah', 'PageController@sejarah');
Route::get('/wilayah', 'PageController@wilayah');

Route::get('/pemerintah-desa', 'PageController@pd');
Route::get('/bpd', 'PageController@bpd');
Route::get('/lpm', 'PageController@lpm');
Route::get('/pkk', 'PageController@pkk');
Route::get('/karang-taruna', 'PageController@kt');


