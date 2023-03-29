<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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
    return view('login');
})->name('login');

Route::get('register',[RegisterController::class,'register'])->name('register');

Route::post('register',[RegisterController::class,'registerform'])->name('registerform');


Route::get('Adminregister',[RegisterController::class,'Adminregister'])->name('Adminregister');

Route::post('Adminregister',[RegisterController::class,'Adminregisterform'])->name('Adminregisterform');


Route::post('login',[RegisterController::class,'loginform'])->name('login-form');

Route::get('home',[RegisterController::class,'home'])->name('home')->middleware('auth');

Route::get('/AdminHome',[RegisterController::class,'adminHome'])->name('AdminHome')->middleware('auth');

Route::get('/user-home',[RegisterController::class,'userHome'])->name('user-home')->middleware('auth');



//Room Details Adding

Route::get('Addroom',[RegisterController::class,'createPostView'])->name('Addroom')->middleware('auth');


Route::post('/posts', [RegisterController::class, 'createPost'])->name('posts.create')->middleware('auth');


//Log-Out


Route::get('/login', [AuthController::class, 'logout'])->name('logout-page');


//Booking started

Route::get('/room',[RegisterController::class,'book'])->name('book')->middleware('auth');

Route::post('/room',[RegisterController::class,'booking'])->name('booking')->middleware('auth');



//Showing Booked room for Admin

Route::get('/BookedRoom',[RegisterController::class,'booked'])->name('Booked')->middleware('auth');




Route::get('/roomlist',[RegisterController::class,'roomlist'])->name('roomlist')->middleware('auth');

