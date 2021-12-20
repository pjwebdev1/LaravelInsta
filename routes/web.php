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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.index');


Route::post('/testscript', [App\Http\Controllers\TestscriptController::class, 'store'])->name('testscript.store');
Route::get('/testscript', [App\Http\Controllers\TestscriptController::class, 'index'])->name('testscript.index');
// added this route to use for a page with a forum. This must be above the below route because the app will think 'create' is {someid}
Route::get('/testscript/create', [App\Http\Controllers\TestscriptController::class, 'create'])->name('testscript.create');


//->middleware('auth') makes sure that only authenticated users can see this page
Route::get('/somedetails/{someid}', [App\Http\Controllers\TestscriptController::class, 'show'])->name('somedetails.show')->middleware('auth');
Route::delete('/somedetails/{someid}', [App\Http\Controllers\TestscriptController::class, 'destroy'])->name('somedetails.destroy');




Auth::routes();

// Do not create register routes. Remove the above Auth::routes();
// Auth::routes(['register'=>false ]);



Route::get('/', function () {
	return view('welcome');
});


