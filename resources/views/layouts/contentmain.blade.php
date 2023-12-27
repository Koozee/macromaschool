<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Macroma School</title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css" rel="stylesheet" />
</head>

<body class="overflow-x-hidden">
    {{-- header start --}}
    <header class="py-5 flex justify-center items-center w-full h-max">
        <nav class="container flex justify-between items-center h-max max-w-full">
            <div class="pl-4 gap-2 flex items-center">
                <ion-icon class="md:hidden cursor-pointer" onclick="onToogleNav(this)" size="large"
                    name="menu-sharp"></ion-icon>
                <h1>Macroma School.</h1>
            </div>
            <div id="navmenu"
                class="absolute z-50 hidden md:block top-[9%] w-screen md:relative md:top-0 md:w-max bg-slate-100 md:bg-sky-300 px-4 md:mx-auto md:rounded-full drop-shadow-xl md:shadow-sky-400/30">
                <ul class="flex flex-col md:items-center md:flex-row mx-auto px-4 py-2 gap-[4vw]">
                    <li class="text-base py-3 md:text-lg hover:text-white hover:underline hover:underline-offset-8"><a
                            href="">Home</a>
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
            <a href="/register"><button
                    class="text-base md:text-lg w-max h-max bg-sky-300 shadow-xl shadow-sky-300/50 border-2 border-transparent py-4 px-7 mr-4 md:mr-10 rounded-full hover:bg-sky-500 active:bg-sky-600 focus:bg-transparent focus:ring-1">Join
                    Now</button></a>

        </nav>
    </header>
    {{-- header end --}}
    @yield('content')

    {{-- all script here  --}}
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
