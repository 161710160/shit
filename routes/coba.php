<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "brazzer" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post',function() {
	return '<h1><i><u>Anonymous is invicible</u></h1>'
	.'Selamat datang di neraka *rotfl*<br>'
	.'Dont abuse.</i>';
});
