<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

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
    return view('pages.admin');
}
public function adminpages(){
    $users = DB::table('users')->get();
    return view('pages.adminpages', ['users' => $users]);
}

public function delete($id){
    // Ambil nama file gambar sebelum menghapus data
    $imageFileName = DB::table('users')->where('id', $id)->value('imageuser');

    // Hapus data pengguna dari database
    DB::table('users')->where('id', $id)->delete();

    // Hapus gambar dari folder 'imguser' jika ada
    if ($imageFileName) {
        // Gunakan Storage facade untuk menghapus file
        Storage::delete('imguser/' . $imageFileName);
    }

    return redirect('/adminpages')->with(
        'success',
        'Data Berhasil Dihapus!'
    );
}


public function adminlogin(Request $request){
    // dd($request->all());
    $request->validate([
        'email' => 'required',
        'password' => 'required',
    ], [
        'email.required' => 'Email wajib diisi!',
        'password.required' => 'Password wajib diisi!',
    ]
);
$infologin = [
    'email' => $request->email,
    'password' => $request->password,
];

if (Auth::attempt($infologin)) {
    $user = DB::table('admins')->where('email', $request->email)->first();
    $id = $user->id;
    $name = $user->name;
    $encryptedEmail = Crypt::encryptString($user->email);
    return redirect()->route('/adminpages',['id'=> $id, 'name'=> $name, 'encryptedEmail'=>$encryptedEmail]);
}
else {
    return redirect ('/adminlogin')->withErrors('Email atau password yang dimasukkan salah!')->withinput();
}
}

    public function logout(){
        Auth::logout();
        return redirect('');
    }
}
