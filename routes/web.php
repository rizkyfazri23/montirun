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
    return view('home');
});

Route::get('/login', 'AuthController@login')->name('login');
Route::get('/logout', 'AuthController@logout');
Route::post('/postlogin', 'AuthController@postlogin');
 
Route::post('/postregister', 'AuthController@postregister');
//---------------------------------------------Home project

Route::get('/home', 'IndexController@home');
Route::get('/sparepart', 'IndexController@sparepart');
Route::get('/tentang', 'IndexController@tentang');
Route::get('/montir', 'IndexController@montir');
Route::get('/blog', 'IndexController@blog');
//Route::get('/carakerja', 'IndexController@carakerja');
//Route::get('/layanan', 'IndexController@layanan');
//Route::get('/masuk', 'IndexController@masuk');
//Route::get('/register', 'IndexController@register');

//-------------------------------------------------------------------------------------
Route::get('/customer/exportexcel', 'CustomerController@exportexcel');
Route::get('/customer/exportpdf', 'CustomerController@exportpdf');
//-------------------------------------------------------------------------------------
Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {


    Route::get('/customer', 'CustomerController@index')->middleware('auth');
    Route::post('/customer/create', 'CustomerController@create')->middleware('auth');
    Route::get('/customer/{id}/edit', 'CustomerController@edit')->middleware('auth');
    Route::post('/customer/{id}/update', 'CustomerController@update')->middleware('auth');
    Route::get('/customer/{id}/delete', 'CustomerController@delete')->middleware('auth');
});

Route::group(['middleware' => ['auth', 'checkRole:admin,customer']], function () {
    Route::get('/dashboard', 'DashboardController@index');
});

//ini adalah route yang akan dipanggil controller
//Route::get('/hai/home', 'HelloController@home');
//Route::get('/hai/tentang', 'HelloController@tentang');
//Route::get('/hai/kontak', 'HelloController@kontak');
//Route::get('/hai/artikel', 'HelloController@artikel');

Route::get('/sparepart/ban', 'IndexController@ban');
Route::get('/sparepart/oli', 'IndexController@oli');
Route::get('/sparepart/lampu', 'IndexController@lampu');
Route::get('/keluar', 'IndexController@keluar');


Route::get('/test', function () {
    return view('test');
});