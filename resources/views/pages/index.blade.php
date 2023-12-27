@extends('layouts.contentmain')
@section('content')
    {{-- hero start --}}
    <main class="mt-5">
        <div id="default-carousel" class="relative w-full mx-auto md:translate-x-10" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96 md:w-[70vw] md:mx-auto">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out group" data-carousel-item>
                    <img src="{{ url('https://images.unsplash.com/photo-1531498860502-7c67cf02f657?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 opacity-50 group-hover:opacity-100"
                        alt="...">
                    <p
                        class="font-extrabold font-Montserrat w-full absolute z-50 bottom-10 text-center text-black group-hover:text-white group-hover:bg-black/50">
                        Diskusi Bersama</p>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out group" data-carousel-item>
                    <img src="{{ url('https://images.unsplash.com/photo-1531498860502-7c67cf02f657?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 opacity-50 group-hover:opacity-100"
                        alt="...">
                    <p
                        class="font-extrabold font-Montserrat w-full absolute z-50 bottom-10 text-center text-black group-hover:text-white group-hover:bg-black/50">
                        Rapat Staff HealthTech</p>
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out group" data-carousel-item>
                    <img src="{{ url('https://images.unsplash.com/photo-1531498860502-7c67cf02f657?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <p
                        class="font-extrabold font-Montserrat text-center absolute z-50 bottom-10 w-full text-black group-hover:text-white group-hover:bg-black/50">
                        Webinar</p>
                </div>
                <!-- Item 4 -->
                <div class=" hidden duration-700 ease-in-out group" data-carousel-item>
                    <img src="{{ url('https://images.unsplash.com/photo-1531498860502-7c67cf02f657?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 opacity-50 group-hover:opacity-100"
                        alt="...">
                    <p
                        class="font-extrabold font-Montserrat text-center absolute z-50 bottom-10 w-full text-black group-hover:text-white group-hover:bg-black/50">
                        Latihan Berama</p>
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out group" data-carousel-item>
                    <img src="{{ url('https://images.unsplash.com/photo-1531498860502-7c67cf02f657?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 opacity-50 group-hover:opacity-100"
                        alt="...">
                    <p
                        class="font-extrabold font-Montserrat text-center absolute z-50 bottom-10 w-full text-black group-hover:text-white group-hover:bg-black/50">
                        Konsultasi</p>
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full md:ml-48 px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full md:mr-48 px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
        <div class="container p-5 mt-4">
            <h2 class="underline underline-offset-4 text-lg font-black">Macroma School</h2>
            <h1 class="my-5 text-xl font-semibold">Tempat di mana perjalananmu menuju keahlian teknologi dimulai!
                Jelajahi potensimu, tingkatkan keterampilanmu, dan raih kesuksesan bersama komunitas kami.</h1>
            <h1
                class="bg-sky-300 p-4 mt-11 w-max rounded-2xl shadow-xl shadow-sky-300/50 border-2 border-transparent hover:bg-sky-500 active:bg-sky-600 focus:bg-transparent focus:ring-1">
                <a href="">Daftar Sekarang</a>
            </h1>
        </div>
    </main>
    {{-- end hero section --}}

    {{-- section program --}}
    <article class="container p-5 mt-5">
        <h1 class="text-center text-xl font-extrabold"><span class="text-blue-600">Program</span> Macroma School
            Untukmu
        </h1>
        <h2 class="mt-5 text-center text-sm font-bold">Temukan programmu di Macroma School. Mulailah langkah menuju
            keahlian teknologi!</h2>

        <div class="container flex items-center bg-slate-200 rounded-xl mt-5">
            <img src="{{ url('img/cube.png') }}" alt="cube" class="w-36">
            <div class="p-1">
                <h3 class="font-semibold py-2">Bootcamp</h3>
                <p class="">Pilih Bootcamp, Belajar, dan Dapat Kerja</p>
            </div>
        </div>
        <div class="container flex items-center bg-slate-200 rounded-xl mt-5">
            <img src="{{ url('img/proclass.png') }}" alt="cube" class="w-36">
            <div class="p-1">
                <h3 class="font-semibold py-2">Pro Class</h3>
                <p class="">Pilih Kelas Favoritmu dan Upgrade Skill Ke Level Pro</p>
            </div>
        </div>
        <div class="container flex items-center bg-slate-200 rounded-xl mt-5">
            <img src="{{ url('img/elearning.png') }}" alt="cube" class="w-36">
            <div class="p-1">
                <h3 class="font-semibold py-2">E-Learning</h3>
                <p class="">Belajar Dimanapun dan Dapat Sertifikat Hasil Belajar</p>
            </div>
        </div>
    </article>
    {{-- end section program --}}

    {{-- section kelebihan --}}
    {{-- <article class="container p-5 mt-5">
        <h1 class="text-center text-lg font-extrabold">Upgrade Skill Bersama Macroma School</h1>


    </article> --}}
    {{-- end section kelebihan --}}

    {{-- section Bootcamp --}}
    <section class="container p-4 mt-5">
        <h1 class="font-extrabold text-2xl">Bootcamp</h1>
        <h2 class="font-medium text-lg py-3">Pilih Bootcamp, Belajar, dan Dapat Kerja</h2>

        <div class="mt-5 p-2 flex bg-slate-200 border-2">
            <img class="w-28" src="{{ url('img/fullstack.png') }}" alt="FS_logo">
            <div class="p-2">
                <h3 class="font-semibold">Full Stack Web Developer</h3>
                <div class="flex gap-2">
                    <p class="pt-2 text-xs flex items-center gap-1"><img class="w-5"
                            src="{{ url('img/time-outline.svg') }}" alt="clock">20 Minggu</p>
                    <p class="pt-2 text-xs flex items-center gap-1"><img class="w-5"
                            src="{{ url('img/calendar-clear-outline.svg') }}" alt="calendar"> Desember 2023 </p>
                </div>
                <p class="relative text-sm text-green-500 font-medium py-2 text-right top-4">Rp. 5.000.000</p>
            </div>
        </div>
        <div class="mt-5 p-2 flex bg-slate-200 border-2">
            <img class="w-28" src="{{ url('img/uiux.png') }}" alt="uiux_logo">
            <div class="p-2">
                <h3 class="font-semibold">UI/ UX Designer</h3>
                <div class="flex gap-2">
                    <p class="pt-2 text-xs flex items-center gap-1"><img class="w-5"
                            src="{{ url('img/time-outline.svg') }}" alt="clock">20 Minggu</p>
                    <p class="pt-2 text-xs flex items-center gap-1"><img class="w-5"
                            src="{{ url('img/calendar-clear-outline.svg') }}" alt="calendar"> Desember 2023 </p>
                </div>
                <p class="relative text-sm text-green-500 font-medium py-2 text-right top-5">Rp. 5.000.000</p>
            </div>
        </div>
        <div class="mt-5 p-2 flex bg-slate-200 border-2">
            <img class="w-28" src="{{ url('img/3D_anim.png') }}" alt="anim_logo">
            <div class="p-2">
                <h3 class="font-semibold">3D Animation</h3>
                <div class="flex gap-2">
                    <p class="pt-2 text-xs flex items-center gap-1"><img class="w-5"
                            src="{{ url('img/time-outline.svg') }}" alt="clock">20 Minggu</p>
                    <p class="pt-2 text-xs flex items-center gap-1"><img class="w-5"
                            src="{{ url('img/calendar-clear-outline.svg') }}" alt="calendar"> Desember 2023 </p>
                </div>
                <p class="relative text-sm text-green-500 font-medium py-2 text-right top-5">Rp. 5.000.000</p>
            </div>
        </div>
        <div class="text-right mt-5">
            <a class="text-lg text-blue-500 hover:text-blue-700" href="">Lihat Semua Bootcamp -></a>
        </div>
    </section>
    {{-- end section Bootcamp --}}

    {{-- section pro class --}}
    <section class="container p-4 mt-5">
        <h1 class="font-extrabold text-2xl">Pro Class</h1>
        <h2 class="font-medium text-lg py-3">Pilih Kelas Favoritmu, dan Upgrade Skill Ke Level Pro</h2>

        <div class="mt-5 p-2 flex bg-slate-200 border-2">
            <img class="w-28" src="{{ url('img/fullstack.png') }}" alt="FS_logo">
            <div class="p-2">
                <h3 class="font-semibold">Full Stack Web Developer</h3>
                <div class="flex gap-2">
                    <p class="pt-2 text-xs flex items-center gap-1"><img class="w-5"
                            src="{{ url('img/time-outline.svg') }}" alt="clock">20 Minggu</p>
                    <p class="pt-2 text-xs flex items-center gap-1"><img class="w-5"
                            src="{{ url('img/calendar-clear-outline.svg') }}" alt="calendar"> Desember 2023 </p>
                </div>
                <p class="relative text-sm text-green-500 font-medium py-2 text-right top-5">Rp. 5.000.000</p>
            </div>
        </div>
        <div class="mt-5 p-2 flex bg-slate-200 border-2">
            <img class="w-28" src="{{ url('img/uiux.png') }}" alt="uiux_logo">
            <div class="p-2">
                <h3 class="font-semibold">UI/ UX Designer</h3>
                <div class="flex gap-2">
                    <p class="pt-2 text-xs flex items-center gap-1"><img class="w-5"
                            src="{{ url('img/time-outline.svg') }}" alt="clock">20 Minggu</p>
                    <p class="pt-2 text-xs flex items-center gap-1"><img class="w-5"
                            src="{{ url('img/calendar-clear-outline.svg') }}" alt="calendar"> Desember 2023 </p>
                </div>
                <p class="relative text-sm text-green-500 font-medium py-2 text-right top-5">Rp. 5.000.000</p>
            </div>
        </div>
        <div class="mt-5 p-2 flex bg-slate-200 border-2">
            <img class="w-28" src="{{ url('img/3D_anim.png') }}" alt="anim_logo">
            <div class="p-2">
                <h3 class="font-semibold">3D Animation</h3>
                <div class="flex gap-2">
                    <p class="pt-2 text-xs flex items-center gap-1"><img class="w-5"
                            src="{{ url('img/time-outline.svg') }}" alt="clock">20 Minggu</p>
                    <p class="pt-2 text-xs flex items-center gap-1"><img class="w-5"
                            src="{{ url('img/calendar-clear-outline.svg') }}" alt="calendar"> Desember 2023 </p>
                </div>
                <p class="relative text-sm text-green-500 font-medium py-2 text-right top-5">Rp. 5.000.000</p>
            </div>
        </div>
        <div class="text-right mt-5">
            <a class="text-lg text-blue-500 hover:text-blue-700" href="">Lihat Semua Pro Class -></a>
        </div>
    </section>
    {{-- end section pro class  --}}

    {{-- section testimonial --}}
    <section class="container p-4 mt-5 bg-slate-600">
        <div class="text-center">
            <h3 class="font-semibold text-white py-5 mt-5">Updated: 1 Desember 2023</h3>
            <h1 class="text-5xl font-bold mt-5 text-white">2500 Alumni</h1>
            <h2 class="font-semibold text-2xl py-2 text-white">Meraih Karir Impiannya</h2>
            <p class="text-green-400 py-2 text-xl">Walau <span class="text-sky-400">Tidak Punya Pengalaman</span></p>
        </div>
    </section>
    {{-- end testimonial --}}


    
    @endsection

