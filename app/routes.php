
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

Route::get('/', function()
{
	return View::make('home')->with('user', 2);
});

Route::get('users', function()
{
	// Session::push('user.teams', 'developers');
	// $data = Session::all();
	// var_dump($data);
	// $users = User::all();
    // return View::make('users')->with('users', $users);
});

Route::get('projects', function()
{
    return View::make('projects');
});

Route::post('projects/create', function()
{
	Session::flush();
	$input = Input::all();
	var_dump($input);
});

Route::get('signin', 'UserController@getSigninView');
Route::post('signin', 'UserController@signin');

Route::get('logout', 'UserController@logout');

Route::get('signup', 'UserController@getSignupView');
Route::post('signup', 'UserController@signup');

Route::get('cityhall/{id}/districts', function($id)
{
	$districts = District::where('city_hall_id', '=', $id)->get();
	return Response::json($districts);
});