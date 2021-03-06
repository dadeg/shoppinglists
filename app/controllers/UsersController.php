<?php

class UsersController extends BaseController
{

	public function create()
	{
		// show the create user form
		return View::make('create_user_form');
	}
	
	public function handleCreate()
	{
		//handle create form submission
		$user = new User;

		if($user->validate(Input::all()))
		{
			//validation passed, save the model
			$user->username = Input::get('username');
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			
			$user->save();
	
			return Redirect::action('UsersController@login');

		}
		else
		{
			//failed validation.
			$errors = $user->messages();
			Input::flash();
			return Redirect::action('UsersController@create')->withErrors($errors);
		}
	}

	public function login()
	{
		// show the login form
		return View::make('login_user_form');
	}

	public function handleLogin()
	{
		//try to log the user in. if no user, send back to login screen.
		$credentials = Input::only('username','password');
		if(Auth::attempt($credentials))
		{
			//success
			return Redirect::intended('/');
		}
		
		//failed
		return Redirect::to('login')->withErrors('Your Username or Password was incorrect. Please try again.');
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::action('UsersController@login');
	}

}
