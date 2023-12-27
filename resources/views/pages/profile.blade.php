@extends('layouts.userapp')
@section('contentuser')
    <main class="mt-5 p-4">
        <div class="container text-center mx-auto max-w-3xl">
            <h1 class="text-2xl font-bold py-2">Welcome, <span>Niko Achmad</span>!</h1>
            <h2 class="text-xl font-normal py-2">Informasi tentang profil serta preferensi Anda di semua layanan yang
                disediakan oleh Macroma School.</h2>
        </div>
        <form class="max-w-sm mx-auto" action="{{ route('profileupdate', ['id' => $id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <img class="w-32 h-32 rounded-full border-2 mx-auto" src="{{ asset('imguser/' . $imageuser) }}" alt="Foto Profil">
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="text" id="email" name="email" value="{{ $email }}" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                    Lengkap</label>
                <input type="text" id="name" name="name" value="{{ $name }}" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-5">
                <label for="borndate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                    Lahir</label>
                <input type="date" id="borndate" name="borndate" value="{{ $borndate }}" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-5">
                <label for="notel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                    Telepon</label>
                <input type="text" id="notel" name="notel" value="{{ $notel }}" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-5">
                <label for="created_at" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Akun
                    Dibuat</label>
                <input type="datetime" id="disabled-input-2" name="created_at" aria-label="disabled input 2"
                    class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    value="{{ $created_at }}" disabled readonly>
            </div>
            <div class="mb-5">
                <label for="updated_at" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Akun
                    Terakhir Diubah</label>
                <input type="datetime" id="disabled-input-2" name="updated_at" aria-label="disabled input 2"
                    class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    value="{{ $updated_at }}" disabled readonly>
            </div>
            <div class="mb-5">
                <label for="imageuser" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Perbarui Foto
                    Profil</label>
                <input type="file" id="imageuser" name="imageuser"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <button type="submit"
                class="px-5 py-2.5 text-sm font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan Perubahan</button>
        </form>
    </main>
@endsection
