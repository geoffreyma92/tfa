<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
//   return View::make('hello');
// });



Route::get('users', function(){
//   $users = DB::table('users')->get();
//   $users = User::all();
//   return $users; 
  $user = User::find(1);

  Auth::login($user);
//   $items = Auth::user()->name;
  return  $user;
});

// Route::get('/', function(){
//   $users = DB::table('users')->get();
//   return $users; 
// });
  
// Route::get('users', function()
// {
// //     var_dump(DB::select('select * from items'));
// //   $users = DB::table('users')->get();
// //   return $users;
//   $name = 'Geoffrey';
//   return View::make('hello')->with('name',$name);
// });

// It will run the Home controller once the page loads
Route::get('/', array('as' => 'home', 'uses' => 'HomeController@getIndex'))->before('auth');

Route::get('/login', array('as' => 'login', 'uses' => 'AuthController@getLogin'))->before('guest');

Route::post('login', array('uses' => 'AuthController@postLogin'))->before('crsf');


