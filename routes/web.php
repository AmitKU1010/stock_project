<?php  


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// for Admin

Route::group(['as' => 'admin.',['middleware' =>'auth', 'admin'], 'prefix' => 'admin'], function () 
{

Route::get("/dashboard", function(){
   return View::make("admin.dashboard");
});

Route::get('/user', 'UserController@index');

Route::post('/user/store', 'UserController@store');

Route::get('/userview', 'UserController@view');

Route::get('/userview/destroy/{id}','UserController@destroy');

Route::get('/edit_profile/{id}','UserController@edit_profile');

});

// for Admin


Route::group(['as' => 'associate.', 'prefix' => 'associate'], function () 
{

Route::get("/dashboard", function()
{
   return View::make("associate.dashboard");
});

});

// for Associate


Route::group(['as' => 'client.', 'prefix' => 'client'], function () 
{

Route::get("/dashboard", function()
{
   return View::make("client.dashboard");
});

});
// for Associate



  
 
 

 

   