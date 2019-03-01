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

Route::resource('people', 'PersonController');

Route::resource('rooms', 'RoomController');



/*Route::get('/rooms/create', function (){

    return view('rooms.create');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/layouts/master' ,function (){

    return view('layouts.master');
});
Route::get('/page2' ,function (){

    return view('page2');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
