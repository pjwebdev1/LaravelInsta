<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/testscript', function () {
$stuff = [
	'type' => 'car', 'make' => 'Acura', 'model' => 'Integra', 'price' => 5000
];

$pizzas = [
	['name' => 'Hawaian', 'topping' => 'pinapple', 'crust' => 'thin', 'listnumber' => 1],
	['name' => 'Canadian', 'topping' => 'bacon', 'crust' => 'thick', 'listnumber' => 2],
	['name' => 'Meat Lovers', 'topping' => 'pepperoni', 'crust' => 'thick', 'listnumber' => 3]
];
	
return view('testscript', $stuff, ['pizzas' => $pizzas, 'someparam' => request('someparam')]);

});

Route::get('/somedetails/{someid}', function ($someid) {
	return view('somedetails',['someid' => $someid]);
});



Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');

Auth::routes();


