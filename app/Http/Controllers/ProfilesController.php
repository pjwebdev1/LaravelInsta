<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
	public function index($user)
	{
		$user = User::findOrFail($user);
		return view('profile.index', ['user' => $user]);
	}


	public function edit(User $user)
	{
		return view('profile.edit', compact('user'));
	}

	public function update(User $user)
	{
		$data = request()->validate([
			'title' => 'required|string',
			'description' => 'required|string',
			'url' => 'url|string',
			'image' => 'image',
		]);

		auth()->user()->profile()->update($data);


		// dd(auth()->user()->profile);
		// dd($data);
		// return view('profile.edit', compact('user'));
	}
}
