<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class UserController extends Controller
{
    public function create(Request $request)
    {
        // dd($request);
        try {
            $data = DB::table('users')->insert([
                "email" => $request->email,
                "name" => $request->name,
                "borndate" => $request->borndate,
                "notel" => $request->notel,
                "imageuser" => $request->imageuser,
                "password" => bcrypt($request->password),
                "created_at" => now(),
                "updated_at" => now(),
            ]);
            if ($data) {
                // Jika penyisipan berhasil, tangani pengunggahan file
                if ($request->hasFile('imageuser')) {
                    $request->file('imageuser')->move('imguser/', $request->file('imageuser')->getClientOriginalName());
                    // Perbarui kolom "imageuser" dengan nama file
                    DB::table('users')
                        ->where('email', $request->email) // Anggap "email" adalah pengidentifikasi unik
                        ->update(['imageuser' => $request->file('imageuser')->getClientOriginalName()]);
                }
            }
            return redirect()->route('loginusers')->with('success', 'Terima kasih telah percaya pada
                    kami,
                    silahkan Login menggunakan akun yang telah anda buat.');
        } catch (\Exception $e) {
            return redirect()->back()->with('fail', 'Gagal mendaftar karena Email atau Nomor Telepon sudah terdaftar');
        }
    }

    public function loginuserrequest(Request $request)
    {
        // dd($request);
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ],
            [
                'email.required' => 'Email wajib diisi!',
                'password.required' => 'Password wajib diisi!',
            ]
        );
        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            $user = DB::table('users')->where('email', $request->email)->first();
            $id = $user->id;
            $name = $user->name;
            $encryptedEmail = Crypt::encryptString($user->email);
            return redirect()->route('dashboard', ['id' => $id, 'name' => $name, 'encryptedEmail' => $encryptedEmail]);
        } else {
            return redirect('/loginusers')->withErrors('Email atau password yang dimasukkan salah!')->withinput();
        }
    }

    // redirect to google
    public function googleredirect()
    {
        return Socialite::driver('google')->redirect();
    }

    // googlecallback
    public function googlecallback(Request $request)
    {
        try {
            $user = Socialite::driver('google')->user();
            $userDB = User::where('email', $user->email)->first();

            if ($userDB) {
                // Jika pengguna sudah terdaftar, login dan arahkan ke dashboard atau halaman lain
                Auth::login($userDB);

                $userData = DB::table('users')->where('email', $user->email)->first();
                $id = $userData->id;
                $name = $userData->name;
                $encryptedEmail = Crypt::encryptString($user->email);

                return redirect()->route('dashboard', compact('id', 'name', 'encryptedEmail'));
            } else {
                // Jika pengguna belum terdaftar, buat user baru
                $newUser = User::create([
                    'google_id' => $user->getId(),
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                ]);

                // Login user yang baru dibuat
                Auth::login($newUser);

                $id = $newUser->id;
                $name = $newUser->name;
                $encryptedEmail = Crypt::encryptString($user->email);

                return redirect()->route('dashboard', compact('id', 'name', 'encryptedEmail'));
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    public function update(Request $request, $id)
    {

        try {
            // dd($request);
            // Mendapatkan nama file foto sebelum pembaruan
            $oldFoto = DB::table('users')->where('id', $id)->value('imageuser');

            // Update data dalam database
            $updated = DB::table('users')
                ->where('id', $id)
                ->update([
                    "email" => $request->email,
                    "name" => $request->name,
                    "borndate" => $request->borndate,
                    "notel" => $request->notel,
                    "imageuser" => $request->imageuser,
                ]);
            if ($updated) {
                // Jika pembaruan berhasil, tangani pengunggahan file
                if ($request->hasFile('imageuser')) {
                    // Hapus foto lama jika ada
                    if (!empty($oldFoto)) {
                        $oldFotoPath = public_path('imguser/') . $oldFoto;
                        if (file_exists($oldFotoPath)) {
                            unlink($oldFotoPath);
                        }
                    }
                    if ($request->hasFile('imageuser')) {
                        $request->file('imageuser')->move('imguser/', $request->file('imageuser')->getClientOriginalName());
                        // Perbarui kolom "foto" dengan nama file
                        DB::table('users')
                            ->where('id', $id) // Anggap "id" adalah pengidentifikasi unik
                            ->update(['imageuser' => $request->file('imageuser')->getClientOriginalName()]);
                    }

                    return redirect()->back()->with(
                        'success',
                        'Data Berhasil Diperbarui'
                    );
                } else {
                    return redirect()->back()->with('fail', 'Gagal update data');
                }
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('fail', 'Gagal update data');
        }

    }
}
