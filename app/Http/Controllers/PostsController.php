<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function create()
	{
		return view('posts.create');
	}

	public function store()
	{
		//saves to data variable and validates to make sure it meets the requirements
		$data = request()->validate([
			'caption' => 'required|string',
			'image' => 'required|image'
		]);

		$imagePath = request('image')->store('uploads', 'public');

		$image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 800);
		$image->save();

		auth()->user()->posts()->create([
			'caption' => $data['caption'],
			'image' => $imagePath
		]);

		return redirect('/profile/' . auth()->user()->id);

		// return view('profile/index', auth()->user()->id);

		// auth()->user()->posts()->create($data);
		// dd(request()->all());
		// return view('p.store');
	}

	// public function show($imageId)
	// {
	// 	$image = Posts::findOrFail($imageId);
	// 	$imageUrl = $image->image;
	// 	dd($imageUrl);
	// }
	public function show(\App\Models\Posts $imageId)
	{

		// dd($imageId);


		return view('posts.show', ['imageId' => $imageId]);
		// return redirect('/storage/' . $imageUrl);		
		// return redirect('/posts/' . $imageUrl);
	}


}
