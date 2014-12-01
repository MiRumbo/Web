
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
	return View::make('home');
});

Route::get('users', function()
{
	// Session::push('user.teams', 'developers');
	$data = Session::all();
	var_dump($data);
	// $users = User::all();
    // return View::make('users')->with('users', $users);
});

Route::get('projects', function()
{
    return View::make('projects');
});

Route::post('projects', function()
{
	Session::flush();
	// $users = User::all();
 //    return View::make('users')->with('users', $users);
	$input = Input::all();
	var_dump($input);
});

Route::get('signup', function()
{
    return View::make('signup');
});

Route::get('cityhall/{id}/districts', function($id)
{
	$districts = District::all();
	//var_dump($districts);
	return Response::json($districts);
});