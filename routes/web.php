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
Route::get('/edit_user/{id}','UserController@edit_user');
Route::get('/client_list', 'UserController@client_list');
Route::get('/incentive','UserController@incentive');
Route::get('/monthwise_incentive/{id}','UserController@monthwise_incentive');
Route::get('/monthwise_incentive_details/{id}/{month}/{year}','UserController@monthwise_incentive_details');
Route::get('/show_user_tree/{id}','UserController@show_user_tree');
Route::get('/show_user_tree_client/{id}','UserController@show_user_tree_client');
});

// for Admin

// for Associate
Route::group(['as' => 'associate.', 'prefix' => 'associate'], function () 
{

Route::get("/dashboard", function()
{
   return View::make("associate.dashboard");
});
Route::get('/incentive','AssociateController@monthwise_incentive');

Route::get('/monthwise_incentive_details/{id}/{month}/{year}','AssociateController@monthwise_incentive_details');
 

});


// for client
Route::group(['as' => 'client.', 'prefix' => 'client'], function () 
{

Route::get("/dashboard", function()
{
   return View::make("client.dashboard");
});

});



  
 
 

 

   