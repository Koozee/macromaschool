<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class SessionController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function register(){
        return view('pages.register');
    }
    public function loginuser(){
        return view('pages.loginusers');
    }
    public function dashboard(){
        $user = auth()->user(); // Dapatkan pengguna yang terotentikasi 
        return view('pages.dashboard', [
            'id' => $user->id, 
            'email' => $user->email, 
            'name' => $user->name,
            'borndate' => $user->borndate, 
            'notel' => $user->notel, 
            'imageuser' => $user->imageuser, 
            'created_at' => $user->created_at, 
            'updated_at' => $user->updated_at, 
            'encryptedEmail' => Crypt::encryptString($user->email), // Enkripsi kembali email
        ]);
    }
    public function profile() {
        $user = auth()->user(); // Dapatkan pengguna yang terotentikasi
    
        return view('pages.profile', [
            'id' => $user->id, 
            'email' => $user->email, 
            'name' => $user->name,
            'borndate' => $user->borndate, 
            'notel' => $user->notel, 
            'imageuser' => $user->imageuser, 
            'created_at' => $user->created_at, 
            'updated_at' => $user->updated_at, 
            'encryptedEmail' => Crypt::encryptString($user->email), // Enkripsi kembali email
        ]);
    }
public function admin(){
    
}

    public function logout(){
        Auth::logout();
        return redirect('');
    }
}
