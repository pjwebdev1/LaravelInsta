<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */

	public function index()
	{
		// $theuser = auth()->user();
		// $user = auth()->user();
		// $test = $user->profile()->followers->contains($user);

		// $user = auth()->user()->following()->get();

		$user = auth()->user()->following()->pluck('profiles.user_id');

		$posts = Posts::whereIn('user_id', $user)->get();

		// dd($posts , 'posts');

		return view('home.index');
	}
}
