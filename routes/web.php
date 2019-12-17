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
    return view('main');
});

Route::get('/buy-list', function () {
    return view('buy-list');
});

Route::get('/buy-map', function () {
    return view('buy-map');
});

Route::get('/buy-filter', function () {
    return view('buy-filter');
});

Route::get('/buy-filter-full', function () {
    return view('buy-filter-full');
});


Route::get('/rent-list', function () {
    return view('rent-list');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
