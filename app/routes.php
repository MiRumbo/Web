
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

Route::post('projects', function()
{
	Session::flush();
	$input = Input::all();
	var_dump($input);
});

Route::get('signin', function()
{		
	if (Auth::check()) return Redirect::to('/');
	return View::make('signin');	
});

Route::post('signin', function()
{	
	$user = new User(Input::all());
	// $user->password = Input::all()['password'];
	if (Auth::attempt(array('email' => $user->email, 'password' => $user->password)))
	{
	    return Redirect::to('/');
	}
	else
	{
		$error = array('hasError' => true, 'errorMessage' => 'Este correo eletrónico ya ha sido registrado');
		return Response::json($error);
	}
});

Route::get('logout', function()
{
	Auth::logout();		
	return Redirect::to('/');
});

Route::get('signup', function()
{	
	if(Auth::check()) {
		return Redirect::to('/');
	}
	else {
		$city_halls = CityHall::all();	
   		return View::make('signup')->with('city_halls', $city_halls);
	}	
});

Route::post('signup', function()
{
	$user = Input::all();
	if(count(User::where('email', '=', $user['email'])->get()) == 0)
	{
		$noHashedPassword = $user['password'];
		$user['password'] = Hash::make($noHashedPassword);
		$user = User::create($user);
		$user->hasError = false;
		Auth::login($user);
		return Response::json($user);
	}
	else
	{
		$error = array('hasError' => true, 'errorMessage' => 'Este correo eletrónico ya ha sido registrado');
		return Response::json($error);
	}
});

Route::get('cityhall/{id}/districts', function($id)
{
	$districts = District::where('city_hall_id', '=', $id)->get();
	return Response::json($districts);
});