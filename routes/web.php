<?php  
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user', 'UserController@index');

Route::post('/user/store', 'UserController@store');

Route::get('/userview', 'UserController@view');

Route::get('/userview/destroy/{id}','UserController@destroy');

Route::get('/edit_profile{id}','UserController@edit_profile');



  
 
 

 

   