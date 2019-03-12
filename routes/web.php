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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/',function(){
	return 'Laravel site';
});


Route::get('hello/{name}',function($name){
	return 'Hello, '.$name;
});

Route::resource('photo', 'PhotoController', ['only' => [
    'index', 'show'
]]);

Route::get('/hello2/{name}', function ($name) {
    return view('name',['name' => $name]);
});

Route::get('/app', function() {
	return view('app');
});


Route::resource('admin','adminController');
Route::get('/index', 'IndexController@name');

Route::resource('mento', 'mentoController');
