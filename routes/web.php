<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'home'])->name('home');

Route::get('loginForm',[HomeController::class,'loginForm'])->name('loginForm');
Route::get('signupForm',[HomeController::class,'signupForm'])->name('signupForm');
Route::post('signup',[HomeController::class,'register'])->name('signup');
Route::post('login',[HomeController::class,'login'])->name('login');
Route::get('post',[HomeController::class,'postList'])->name('post');
Route::get('post/delete/{id}',[HomeController::class,'postDelete'])->name('post.delete');
