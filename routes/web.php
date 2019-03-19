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
	return 'Laravel site2';
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

Route::get('/admin/add/create_mento',function()
{
	return view('admin.add.create_mento');
});

Route::get('/admin/add/create_std',function()
{
	return view('admin.add.create_std');
});

Route::get('/admin/add/choose',function()
{
	return view('admin.add.choose');
});

Route::get('/admin/update','adminController@updates') -> name('admin.updates');

Route::get('/admin/delete','adminController@deletes') -> name('admin.deletes');
// Route::get('/admin/{id}/edit',function($id){
// 	return view('admin.edit');
// });

Route::get('/admin/{id}/edit', 'adminController@edit')->name('admin.edit');

// Route::get('/admin/{id}','adminController@destroy')->name('admin.delete');

Route::get('/admin/{id}/delete','adminController@delete') -> name('admin.delete');


// Route::get('admin/deletes','adminController@deletes') -> name('admin.deletes');
// Route::get('/admin/{id}/edit', function($id){
// 	return view('admin.edit');
// });

Route::resource('admin','adminController');

Route::get('/index', 'IndexController@name');

Route::resource('mento', 'mentoController');
