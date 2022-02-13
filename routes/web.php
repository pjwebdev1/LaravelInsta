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



Route::get('/', function () {return view('welcome');})->name('welcome');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');

Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.index');
Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'update'])->name('profile.update');


Route::get('/p/create', [App\Http\Controllers\PostsController::class, 'create'])->name('p.create');
Route::post('/p', [App\Http\Controllers\PostsController::class, 'store'])->name('p.store');
Route::get('/p/{imageId}', [App\Http\Controllers\PostsController::class, 'show'])->name('p.show');






Route::get('/testscript', [App\Http\Controllers\TestscriptController::class, 'index'])->name('testscript.index');
Route::post('/testscript', [App\Http\Controllers\TestscriptController::class, 'store'])->name('testscript.store');
// added this route to use for a page with a forum. This must be above the below route because the app will think 'create' is {someid}
Route::get('/testscript/create', [App\Http\Controllers\TestscriptController::class, 'create'])->name('testscript.create');
//->middleware('auth') makes sure that only authenticated users can see this page
Route::get('/somedetails/{someid}', [App\Http\Controllers\TestscriptController::class, 'show'])->name('somedetails.show')->middleware('auth');
Route::delete('/somedetails/{someid}', [App\Http\Controllers\TestscriptController::class, 'destroy'])->name('somedetails.destroy');




Route::get('/replicate/create', [App\Http\Controllers\ReplicateController::class, 'create'])->name('replicate.create');
Route::post('/replicate', [App\Http\Controllers\ReplicateController::class, 'store'])->name('replicate.store');
Route::get('/replicate/{buyer}', [App\Http\Controllers\ReplicateController::class, 'index'])->name('replicate.index')->middleware('auth');;





Auth::routes();

// Do not create register routes. Remove the above Auth::routes();
// Auth::routes(['register'=>false ]);




