<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ReplicateController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}




	public function index($buyer)
	{
		$buyer = User::findOrFail($buyer);

		$collection = collect([
			[1, 2, 3],
			[4, 5, 6],
			[7, 8, 9],
		]);
		$collapsed = $collection->collapse();

		$collapsed->all();

		return view('replicate.index', ['buyer' => $buyer, 'collection' => $collection]);
	}

	public function create()
	{
		return view('replicate.create');
	}

	public function store()
	{



		// $image = request()->validate(['image'=>'required|image']);
		$data = request()->validate([
			'caption' => 'required|starts_with:foo',
			'image' => 'required|image',
		]);


		// $imagePath = request('image')->store('uploads', 'public');

		auth()->user()->posts()->create([
			'caption' => $data['caption'],
			'image' => $data['image']->store('uploads', 'public')
		]);


		return redirect('/profile/' . auth()->user()->id);
		// return view('replicate.store');

	}
}
