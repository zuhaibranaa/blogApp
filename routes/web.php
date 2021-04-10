<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postsController;
use App\Http\Controllers\commentsController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\likesController;
use App\Models\post;
use App\Models\User;
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
    $pos = post::all();
    $u = User::all();
    return view('welcome')->with('pos', $pos)->with('u', $u);
});
Auth::routes();
Route::resource('/posts', postsController::class);
Route::resource('/likes', likesController::class);
Route::resource('/profile', profileController::class);
Route::resource('/comment', commentsController::class);
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');