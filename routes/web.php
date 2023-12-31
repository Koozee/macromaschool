<?php

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SessionController;
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


Route::get('/',[SessionController::class, 'index'])->name('index');
Route::get('/register',[SessionController::class, 'register'])->name('register');
Route::post('/register',[UserController::class, 'create'])->name('create');
Route::get('/loginusers',[SessionController::class, 'loginuser'])->name('loginusers');
Route::post('/loginusers',[UserController::class, 'loginuserrequest'])->name('loginuserrequest');
Route::get('/adminlogin',[SessionController::class, 'admin'])->name('adminlogin');
Route::post('/adminlogin',[SessionController::class, 'adminlogin'])->name('adminlogirequest');
Route::get('/adminpages',[SessionController::class, 'adminpages'])->name('adminpages');
Route::get('/delete-users/{id}',[SessionController::class, 'delete'])->name('delete');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/{name}/{encryptedEmail}/{id}',[SessionController::class, 'dashboard'])->name('dashboard');
    // Route::get('/adminpages/{name}/{encryptedEmail}/{id}',[SessionController::class, 'adminpages'])->name('adminpages');
    Route::get('/profile/{name}/{encryptedEmail}/{id}',[SessionController::class, 'profile'])->name('profile');
    Route::put('/profile/{id}',[UserController::class, 'update'])->name('profileupdate');
    Route::get('/logout',[SessionController::class, 'logout'])->name('logout');
    

});


