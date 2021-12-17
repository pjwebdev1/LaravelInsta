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


Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');


Route::get('/', function () {
    return view('welcome');
});


Route::get('/testscript', [App\Http\Controllers\TestscriptController::class, 'index']);
// added this route to use for a page with a forum. This must be above the below route because the app will think 'create' is {someid}
Route::get('/testscript/create', [App\Http\Controllers\TestscriptController::class, 'create']);
Route::get('/testscript/{someid}', [App\Http\Controllers\TestscriptController::class, 'show']);



Auth::routes();


