<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/chart1', 'chart1');
Route::view('/chart2', 'chart2');
Route::view('/chart3', 'chart3');
Route::get('/chart4', 'PeopleController@index');
Route::view('/chart5', 'chart5');
Route::view('/chart6', 'chart6');
Route::view('/chart7', 'chart7');
Route::view('/chart8', 'chart8');