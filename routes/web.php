<?php

use Illuminate\Support\Facades\Route;


Route::get('/dahsboard', 'App\Http\Controllers\HomeController@dashboard')->name('dashboard');
Route::get('/rooms', 'App\Http\Controllers\HomeController@rooms')->name('rooms');
Route::get('/assets', 'App\Http\Controllers\HomeController@assets')->name('assets');
