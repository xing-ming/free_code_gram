<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

/**
 * 
 */
class AuthController extends Controller
{
	/**
	*@method: get
	*@description: show signup form
	*/
	public function getSignUp()
	{
		return view('auth.signup');
	}

	/**
	*@method: post
	*@description: submit signup form data
	*/
	public function postSignUp(Request $request)
	{
		$request->validate([
			'name' => 'required',
			'email' => 'required|email|unique:users',
			'password' => 'required|min:8',
		]);

		User::create([
			'name' => $request->input('name'),
			'email' => $request->input('email'),
			'password' => bcrypt($request->input('password')),
		]);

		return redirect()->route('user.login')->with('info', 'Registration successful');
	}

	/**
	*@method: get
	*@description: show signin form
	*/
	public function getSignIn()
	{
		return view('auth.signin');
	}

	/**
	*@method: post
	*@description: login user
	*/
	public function postSignIn(Request $request)
	{
		$request->validate([
			'email' => 'required|email',
			'password' => 'required',
		]);

		if(!Auth::attempt($request->only(['email', 'password']), $request->has('remember_token')))
		{
			return redirect()->back()->with('info', 'Unable to login in!!!');
		}
		return redirect('/profile/'.auth()->user()->id)->with('info', 'Login successful');
	}

	/**
	*@method: get
	*@description: logout user profile
	*/
	public function getLogout()
	{
		Auth::logout();
		return redirect()->route('user.login')->with('info', 'Logout successful');
	}
}