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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/network_map', 'HomeController@networkmap')->name('home');
Route::get("/scans","network_scan@index");
Route::post("runscans","network_scan@run");
Route::get('/snortrules','SnortsController@index');
Route::get('/addrule','SnortsController@create');
Route::post('/snortstore','SnortsController@store');
Route::delete('/deleterule/{snort}','SnortsController@destroy');
Route::get("/editrule/{snort}",'SnortsController@edit');
Route::patch("/snortupdate/{snort}",'SnortsController@update');
Route::get('/snortrun','SnortsController@run');

