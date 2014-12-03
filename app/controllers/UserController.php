<?php

class UserController extends BaseController {

	public function getSignupView()
	{
		if(Auth::check()) {
			return Redirect::to('/');
		}
		else {
			$city_halls = CityHall::all();	
	   		return View::make('users.signup')->with('city_halls', $city_halls);
		}
	}

	public function signup()
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
	}

	public function getSigninView()
	{
		if (Auth::check()) return Redirect::to('/');
		return View::make('users.signin');	
	}

	public function signin()
	{
		$user = new User(Input::all());
		if (Auth::attempt(array('email' => $user->email, 'password' => $user->password)))
		{
		    $response = array('hasError' => false);	
		}
		else
		{
			$response = array('hasError' => true, 'errorMessage' => 'Credenciales inválidos');	
		}
		return Response::json($response);
	}

	public function logout()
	{
		Auth::logout();		
		return Redirect::to('/');
	}

}