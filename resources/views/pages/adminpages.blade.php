<!-- component -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Macroma School | AdminLogin</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <header>
        <nav class="relative bg-blue-500 p-4 flex items-center justify-between">
            <div>
                <h1 class="text-white text-xl font-semibold">Macroma School Admin</h1>
            </div>
            <div class="flex items-center space-x-4">
                <span class="text-white">Koozee</span>
                <i class="fas fa-user-circle text-white text-2xl"></i>
            </div>
        </nav>
    </header>
    <main class="flex">
        <aside class="bg-gray-800 text-white w-64 min-h-screen p-4">
            <nav>
                <ul>
                    <a href="">
                        <li class="font-semibold py-4 hover:bg-slate-700">Data Akun User</li>
                    </a>
                    <a href="">
                        <li class="font-semibold py-4 hover:bg-slate-700">Data Program & Bootcamp</li>
                    </a>
                    <a href="">
                        <li class="font-semibold py-4 hover:bg-slate-700">Data Mentor</li>
                    </a>
                    <a href="">
                        <li class="text-red-500 hover:text-red-700 hover:bg-slate-700 font-bold relative py-4">Log Out
                        </li>
                    </a>
                </ul>
            </nav>
        </aside>

        <div class="container">


            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Lengkap
                            </th>
                            <th scope="col" class="px-6 py-3">
                                No Telepon
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal Lahir
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Dibuat Pada
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Terakhir Update
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $users)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $users->id }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $users->email }}
                                </td>
                                <td class="px-6 py-4 flex items-center">
                                    <p class="px-2">{{ $users->name }}</p> <img class="w-24 h-20" src="{{ asset('imguser/' . $users -> imageuser) }}" alt="">
                                </td>
                                <td class="px-6 py-4">
                                    {{ $users->notel }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $users->borndate }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $users->created_at }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $users->updated_at }}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="/delete-users/{{ $users->id }}"
                                        class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{-- alert success --}}
            @if (Session::has('success'))
                <div id="success_alert" class="container mt-5 w-[95%]">
                    <div class="mx-auto flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800"
                        role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
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
        </div>
    </main>


</body>

</html>
