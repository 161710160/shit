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

Route::get('/about/{page}',function($a) {
	return '<h1><i><u>Halo</u></h1>'
	.'Selamat datang di webapp saya<br>'.$a
	.'<br>Laravel is cool.</i>';
});
Route::get('/about/{page}',function($a) {
	return '<h1><i><u>Hola</u></h1>'
	.'Selamat datang di webapp kami<br>'.$a
	.'<br>Laravel is awesome.</i>';
});
Route::get('/about/{page}',function($a) {
	return '<h1><i><u>Hula</u></h1>'
	.'Selamat datang di webapp mereka<br>'.$a
	.'<br>Laravel is fun.</i>';
});

Route::get('/about/{page}',function($a) {
	return '<h1><i><u>Hi</u></h1>'
	.'Selamat datang di webapp kita<br>'.$a
	.'<br>Laravel is boring.</i>';
});
Route::get('/about/{page}',function($a) {
	return '<h1><i><u>Hey</u></h1>'
	.'Selamat datang di webapp dia<br>'.$a
	.'<br>Laravel is funny.</i>';
});

Route::get('/kantin/{makanan}/{minuman}/{cemilan}', function($a,$b,$c) {
	return '<h1> HOT SALE </h1>'.
		   '<i><h5>Saya memesan'.' '.$a.'<br>'.
		   '<i>Saya memesan'.' '.$b.'<br>'.
		   '<i>Saya memesan'.' '.$c.'</h5>';
});


Route::get('/user/{name?}', function ($name = 'Syahrul') {
    return 'Nama Saya '.$name;
});


