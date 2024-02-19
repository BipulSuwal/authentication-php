<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ForgotPasswordManager;

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

Route::get('/', function () {
    return view('main');
});

Route::get('/signin', function(){
    return view('signin');

});

Route::get('/signup', function(){
    return view('signup');
});

Route::post('/signup', [UserController::class, 'signup']);
Route::post('/signin', [UserController::class, 'signin']);
Route::post('/logout', [UserController::class, 'logout']);

//forgot password
Route::get('/forgot-password', [ForgotPasswordManager::class, 'forgotPassword'])->name('forgot.password');
Route::post('/forgot-password', [ForgotPasswordManager::class, 'forgotPasswordPost'])->name('forgot.password.post');