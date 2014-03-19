<?php

class UsersController extends BaseController {

	protected $layout = "layouts.main";


	/**
	 * Contructor
	 *
	 * @return void
	 */
	public function __construct() {
		$this->beforeFilter('csrf', array('on'=>'post'));
		$this->beforeFilter('auth', array('only'=>array('getDashboard')));
	}

	/**
	 * Get Register used
	 *
	 * @return void
	 */
	public function getRegister() {
		$this->layout->content = View::make('users.register');
	}

	/**
	 * Creating post
	 *
	 * @return void
	 */
	public function postCreate() {
		$validator = Validator::make(Input::all(), User::$rules);
		if ($validator->passes()) {
			// validation has passed, save user in DB
			$user = new User;
			$user->firstname = Input::get('firstname');
			$user->lastname = Input::get('lastname');
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->save();

			return Redirect::to('users/login')->with('message', 'Thanks for registering!');
		} else {
			// validation has failed, display error messages
			return Redirect::to('users/register')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
		}
	}
	/**
	 * Get login
	 *
	 * @return void
	 */
	public function getLogin() {
		$this->layout->content = View::make('users.login');
	}

	/**
	 * Post sign in
	 *
	 * @return void
	 */
	public function postSignin() {
		if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) {
			return Redirect::to('users/dashboard')->with('message', 'You are now logged in!');
		} else {
			return Redirect::to('users/login')
			->with('message', 'Your username/password combination was incorrect')
			->withInput();
		}
	}

	/**
	 * Get dashboard
	 *
	 * @return void
	 */
	public function getDashboard() {
		$this->layout->content = View::make('users.dashboard');
	}

	/**
	 * Log out
	 *
	 * @return void
	 */
	public function getLogout() {
		Auth::logout();
		return Redirect::to('users/login')->with('message', 'Your are now logged out!');
	}
}