<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * 
 */
class HomeController extends Controller
{
	
	/**
	*@method: get
	*@description: show home page
	*/
	public function index()
	{
		return view('welcome');
	}
}