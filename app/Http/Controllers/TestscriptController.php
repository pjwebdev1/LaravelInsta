<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testscript; //added this so that i can use the model inside this controller

class TestscriptController extends Controller
{

	//requires that user to be logged in to view all pages below
	// public function __construct()
	// {
	// 	$this->middleware('auth');
	// }

	public function index()
	{

		//test data
		$stuff = [
			'type' => 'car', 'make' => 'Acura', 'model' => 'Integra', 'price' => 5000
		];

		$pizzas = [
			['name' => 'Hawaian', 'topping' => 'pinapple', 'crust' => 'thin', 'listnumber' => 1],
			['name' => 'Canadian', 'topping' => 'bacon', 'crust' => 'thick', 'listnumber' => 2],
			['name' => 'Meat Lovers', 'topping' => 'pepperoni', 'crust' => 'thick', 'listnumber' => 3]
		];

		//accessing the model to retrieve data from database
		
		//$testscripts = Testscript::all();  //added this so that the model stores all the data in testscripts table in varialbe $testscripts. Testscript connects to model Testscript, which looks for a table with the same name but with an "s"at the end.

		//$testscripts = Testscript::orderby('make')->get(); //same as above but now retrieves the data and sorts it in alphabetical order of the 'make' 


		//$testscripts = Testscript::where('make', 'honda')->get();  //same as above but now retrieves the data where the make matches 'honda'

		$testscripts = Testscript::latest()->get();  //same as above but now retrieves the data based of the order they were entered into the database. created_at was a column that i did not enter, it was there already.

		return view('testscript.index', $stuff, ['pizzas' => $pizzas, 'testscripts' => $testscripts, 'someparam' => request('someparam')]); // added 'testscripts' => $testscripts so that it would add the object @testscripts to the view.
	}

	public function show($someid)
	{
		$testdata = Testscript::FindOrFail($someid);	
		return view('somedetails.show', ['testdata' => $testdata]);
	}

	public function create() 
	{
		return view('testscript.create');
	}

	public function store()
	{
		// logs to the terminal
		// error_log(request('makeofcar'));
		// error_log(request('modelofcar'));
		// error_log(request('price ofcar'));
		// return request('details');

//store into database
		$testscript = new Testscript();
		$testscript->make = request('makeofcar');
		$testscript->model = request('modelofcar');
		$testscript->price = request('priceofcar');
		$testscript->details = request('details');
		$testscript->save();

//after 
		return redirect('/testscript/create')->with('msg', 'Success! Thank you for your submission.');
	}

	public function destroy($someid) 
	{
		$testdata = Testscript::FindOrFail($someid);	
		$testdata -> delete();
		return redirect('/testscript/create')->with('msg', 'Success! Thank you for your deletion.');
	}

}

