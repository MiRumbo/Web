
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
	// $data = Session::all();
	// var_dump($data);
	// $users = User::all();
    // return View::make('users')->with('users', $users);
});

Route::get('projects/create', 'ProjectController@getCreateView');
Route::post('projects/create', 'ProjectController@create');

Route::get('projects/{id}', 'ProjectController@getProjectInfoView');

Route::get('signin', 'UserController@getSigninView');
Route::post('signin', 'UserController@signin');

Route::get('logout', 'UserController@logout');

Route::get('signup', 'UserController@getSignupView');
Route::post('signup', 'UserController@signup');

Route::get('cityhall/{id}/districts', 'LocationController@getDistrictsByCityHall');