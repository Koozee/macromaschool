@extends('layouts.userapp')
@section('contentuser')
    <main class="mt-5 p-4">
        <div class="container text-center mx-auto max-w-3xl">
            <h1 class="text-2xl font-bold py-2">Welcome, <span>Niko Achmad</span>!</h1>
            <h2 class="text-xl font-normal py-2">Informasi tentang profil serta preferensi Anda di semua layanan yang
                disediakan oleh Macroma School.</h2>
        </div>
        {{-- alert success --}}
        @if (Session::has('success'))
            <div id="success_alert" class="container mt-5 w-[95%]">
                <div class="mx-auto flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800"
                    role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <p class="text-base">
                        <span class="font-medium">{{ Session::get('success') }}</span>
                    </p>
                </div>
            </div>
        @endif

        {{-- alert fail --}}
        @if (Session::has('fail'))
            <div id="fail_alert" class="container mt-5 w-[95%]">
                <div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
                    role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">{{ Session::get('fail') }}
                        </span>
                    </div>
                </div>
            </div>
        @endif

        <form class="max-w-sm mx-auto" action="{{ route('profileupdate', ['id' => $id]) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('put')
            <img class="w-32 h-32 rounded-full border-2 mx-auto" src="{{ asset('imguser/' . $imageuser) }}"
                alt="Foto Profil">
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
                <input type="file" id="imageuser" name="imageuser" value="{{ $imageuser }}" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <button type="submit"
                class="px-5 py-2.5 text-sm font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan
                Perubahan</button>
        </form>
    </main>
@endsection
