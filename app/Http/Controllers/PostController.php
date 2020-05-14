<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Image;

/**
 * post
 */
class PostController extends Controller
{
	/**
	*@description: authenticate all route
	*/
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	*@method: get
	*@description: create post form
	*/
	public function create()
	{
		return view('posts.create');
	}

	/**
	*@method: post
	*@description: store post
	*/
	public function store(Request $request)
	{
		$data = request()->validate([
			'caption' => 'required',
			'image' => ['required', 'image'],
		]);

		$imagePath = request('image')->store('uploads/post_image', 'public');
		$image = Image::make(public_path("storage/{$imagePath}"))->fit(275, 183);
		$image->save();

		auth()->user()->posts()->create([
			'caption' => $data['caption'],
			'image' => $imagePath,
		]);

		return redirect('/profile/'.auth()->user()->id);
	}

	/**
	*@method: show
	*@description: show each post information
	*/
	public function show($post)
	{
		$post = Post::findOrFail($post);
		return view('posts.show', compact('post'));
		// \App\Models\Post 
	}
}