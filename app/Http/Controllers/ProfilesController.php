<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Image;
use Cache;

/**
 * 
 */
class ProfilesController extends Controller
{
	/**
	*@method: auth
	*@description: authenticaton
	*/
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	*@method: get
	*@description: create profile form
	*/
	public function create()
	{
		return view('profile.create');
	}

	/**
	*@method: post
	*@description: store profile
	*/
	public function store(Request $request)
	{
		$data = request()->validate([
			'title' => 'required',
			'description' => 'required',
			'url' => 'url',
		]);

		auth()->user()->profile()->create($data);

		return redirect('/profile/'.auth()->user()->id);
	}

	/**
	*@method: get
	*@description: show login user profile
	*/
	public function show(User $user)
	{
		$postCount = Cache::remember(
			'count.posts'.$user->id, 
			now()->addSeconds(30),
			function () use ($user) {
				return $user->posts->count();
			}
		);
		return view('profile.show', compact('user', 'postCount'));
	}

	/**
	*@method: get
	*@description: edit user profile
	*/
	public function edit(User $user)
	{
		// $this->authorize('update', $user->profile);
		return view('profile.edit', compact('user'));
	}

	/**
	*@method: get
	*@description: update user profile
	*/
	public function update(User $user)
	{
		// $this->authorize('update', $user->profile);
		
		$data = request()->validate([
			'title' => 'required',
			'description' => 'required',
			'url' => 'url',
			'image' => '',
		]);

		if (request('image')) {
			$imagePath = request('image')->store('uploads/profile_image', 'public');
			$image = Image::make(public_path("storage/{$imagePath}"))->fit(275, 183);
			$image->save();
		}

		auth()->user()->profile->update(array_merge($data, ['image' => $imagePath]));
		return redirect('/profile/'.auth()->user()->id);
	}
}