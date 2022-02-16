<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;

use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
	public function index($user)
	{
		$user = User::findOrFail($user);
		return view('profile.index', ['user' => $user]);
	}


	public function edit(User $user)
	{
		$this->authorize('update', $user->profile);

		return view('profile.edit', compact('user'));
	}

	public function update(User $user)
	{

		$this->authorize('update', $user->profile);
		
		$data = request()->validate([
			'title' => 'required|string',
			'description' => 'required|string',
			'url' => 'url|string',
			'image' => 'image',
		]);

		if (request('image')){
			$imagePath = request('image')->store('profile', 'public');
			$image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
			$image->save();

			$imageArray = ['image'=>$imagePath];
		}

		auth()->user()->profile()->update(array_merge($data, $imageArray ?? []));


		// dd(auth()->user()->profile);
		// dd($data);
		return view('profile.index', compact('user'));
	}
}
