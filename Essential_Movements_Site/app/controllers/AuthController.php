<?php

class AuthController extends BaseController {


	public function showLogin()
	{
		// Check if we are already logged in
		if(Auth::check())
		{
			// Redirect to homepage
			return Redirect::to('')->with('success', 'You are already logged in');
		}

		// Show the login page
		return View::make('auth/login');
	}

	public function postLogin()
	{
		// Get all the inputs
		// id is used to for login, username is used for validation to return correct error-strings
		$userdata = array(
			'username' => Input::get('username'),
			'password' => Input::get('password')
		);

		// Declare the rules for the form validation.
		$rules = array(
			'username' => 'Required',
			'password' => 'Required'
		); 

		// Validate the inputs.
		$validator = Validator::make($userdata, $rules);

		// Check if the form validates with success
		if($validator->passes())
		{
			// remove username, because it was just used for validation
			unset($userdata['username']);

			// Try to log the user in
			if(Auth::attempt($userdata))
			{
				// Redirect to homepage 
				return Redirect::to('')->with('success', 'You have logged in successfully');
			}
			else
			{
				// Redirect to login page.
				return Redirect::to('login')->withErrors(array('password' => 'Pasword is invalid'))->withInput(Input::except('password'));
			}
		}
		//something went wrong 
		return Redirect::to('login')->withErrors($validator)->withInput(Input::except('password'));
	}

	public function showSignup(){
		return View::make('signup');
	}

	public function postRegister(){
		$input = Input::all();

		$rules = array(
			'firstname' => 'required',
			'lastname' => 'required',
			'username' => 'required|unique:users',
			'email' => 'required|unique:users|email',
			'password' => 'required'
		);

		$v = Validator:: make($input, $rules);

		if($v->fails())
		{
			return Redirect::to('signup')->with_errors($v);
		}else{
			$password = $input['password'];
			$password = Hash::make($password);

			$user = new User;

			$user->firstname = $input['firstname'];
			$user->lastname = $input['lastname'];
			$user->username = $input['username'];
			$user->email = $input['email'];
			$user->password = $password;
			$user->save();
			
			return Redirect::to('login');
		}
	}
	public function getLogout()
	{
		// log out 
		Auth::logout();

		// Redirect to homepage
		return Redirect::to('')->with('success', 'You are logged out');
	}
}