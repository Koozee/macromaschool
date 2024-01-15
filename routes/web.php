<?php

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SessionController;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', [SessionController::class, 'index'])->name('index');
Route::get('/register', [SessionController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'create'])->name('create');
Route::get('/loginusers', [SessionController::class, 'loginuser'])->name('loginusers');
Route::post('/loginusers', [UserController::class, 'loginuserrequest'])->name('loginuserrequest');

Route::get('/auth/redirect',[UserController::class, 'googleredirect'])->name('google.redirect');
Route::get('/google/redirect',[UserController::class, 'googlecallback'])->name('google.callback');

Route::get('/adminlogin', [SessionController::class, 'admin'])->name('adminlogin');
Route::post('/adminlogin', [SessionController::class, 'adminlogin'])->name('adminlogirequest');
Route::get('/adminpages', [SessionController::class, 'adminpages'])->name('adminpages');
Route::get('/delete-users/{id}', [SessionController::class, 'delete'])->name('delete');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/{name}/{encryptedEmail}/{id}', [SessionController::class, 'dashboard'])->name('dashboard');
    // Route::get('/adminpages/{name}/{encryptedEmail}/{id}',[SessionController::class, 'adminpages'])->name('adminpages');
    Route::get('/profile/{name}/{encryptedEmail}/{id}', [SessionController::class, 'profile'])->name('profile');
    Route::put('/profile/{id}', [UserController::class, 'update'])->name('profileupdate');
    Route::get('/logout', [SessionController::class, 'logout'])->name('logout');


});


