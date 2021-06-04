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

Route::get('/', 'IndexController@index')->name('index');
Route::get('/struktur', 'IndexController@struktur')->name('struktur');
Route::get('/blog', 'IndexController@blog')->name('blog');
Route::get('detail/{id}', 'IndexController@detail')->name('detail');
Route::get('/postnewblog', 'IndexController@postnewblog')->name('postnewblog');
Route::get('/tambah','PostController@tambah')->name('tambah');
Route::post('/tambah-data-post','PostController@tambah_data_post');
Route::get('/edit/{id}', 'PostController@edit');
Route::put('update/{id}', 'PostController@update');
Route::get('hapus/{id}', 'PostController@hapus');


