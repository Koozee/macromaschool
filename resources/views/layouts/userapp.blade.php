<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Macroma School | Dashboard</title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css" rel="stylesheet" />
</head>

<body class="overflow-x-hidden">
    {{-- header start --}}
    <header class="py-5 flex justify-center items-center w-full h-max">
        <nav class="container flex justify-between items-center max-w-full h-max">
            <div class="pl-4 gap-2 flex items-center">
                <ion-icon class="md:hidden cursor-pointer" onclick="onToogleNav(this)" size="large"
                    name="menu-sharp"></ion-icon>
                <h1>Macroma School.</h1>
            </div>
            <div id="navmenu"
                class="absolute z-50 hidden md:block top-[9%] w-screen md:relative md:top-0 md:w-max bg-slate-100 md:bg-sky-300 px-4 md:mx-auto md:rounded-full drop-shadow-xl md:shadow-sky-400/30">
                <ul class="flex flex-col md:items-center md:flex-row mx-auto px-4 py-2 gap-[4vw]">
                    <li class="text-base py-3 md:text-lg hover:text-white hover:underline hover:underline-offset-8"><a
                            href="/dashboard/{{ $name }}/{{ $encryptedEmail }}/ {{ $id }}">Home</a>
                    </li>
                    <li class="text-base py-3 md:text-lg hover:text-white hover:underline hover:underline-offset-8"><a
                            href="">Bootcamp
                            & Program</a></li>
                    <li class="text-base py-3 md:text-lg hover:text-white hover:underline hover:underline-offset-8"><a
                            href="">Corporate</a></li>
                    <li class="text-base py-3 md:text-lg hover:text-white hover:underline hover:underline-offset-8"><a
                            href="">About
                            Us</a></li>
                </ul>
            </div>
            <div class="flex items-center mr-4 md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-14 h-14 rounded-full" src="{{asset('imguser/' .$imageuser)}}" alt="user photo">
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">{{ $name }}</span>
                        <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ $email }}</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="/profile/{{ $name }}/{{ $encryptedEmail }}/ {{$id}}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Profile</a>
                        </li>
                        <li>
                            <a href="/logout"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Log
                                out</a>
                        </li>
                    </ul>
                </div>

        </nav>
    </header>
    {{-- header end --}}
    @yield('contentuser')

    {{-- all script here  --}}
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
