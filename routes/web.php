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

Route::get('/pivot', 'cssController@pivot');

Route::get('/', function () {
    return view('Rumah');
});

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/master', function () {
    return view('master');
});

Route::get('/BroadCast', function () {
    return view('BroadCast');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/Berita', 'cssController@index')->name('Tampilan');
Route::get('/Berita/tambah', 'cssController@tambah')->name('tambah');
Route::post('/Berita/store', 'cssController@store');
Route::get('/Berita/edit/{id_berita}', 'cssController@edit');
Route::put('/Berita/{id_berita}', 'cssController@update');
Route::get('/Berita/hapus/{id_berita}', 'cssController@delete');

Route::get('/Kategori', 'cssController@Katkat')->name('tampilKategori');
Route::get('/Kategori/tambahKat', 'cssController@tambahKat')->name('tambahKat');
Route::post('/Kategori/KaStore', 'cssController@KaStore');
Route::get('/Kategori/edit/{id_kategori}', 'cssController@editKategori');
Route::put('/Kategori/{id_kategori}', 'cssController@updateKat');
Route::get('/Kategori/hapus/{id_kategori}', 'cssController@deleteKat');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/User/hapus/{id}', 'HomeController@deleteUser');
