<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col">
<header class="sticky top-0 z-20 bg-white dark:bg-neutral-900 border-b border-slate-300 dark:border-neutral-700 shadow-sm">
    <nav class="flex py-2 px-4 md:px-8 min-h-[68px]" aria-label="Main navigation">
        <div class="max-w-7xl mx-auto flex flex-wrap items-center gap-4 w-full">
            <a href="/"
                class="font-bold text-lg text-slate-900 dark:text-slate-50 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">
                Portofolio Intan
            </a>

            <ul class="flex flex-row flex-wrap gap-4 md:gap-8 md:ml-12 font-semibold text-sm text-slate-900 dark:text-slate-50">
                <li>
                    <a href="/"
                        class="hover:text-blue-700 dark:hover:text-blue-400 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="/about"
                        class="hover:text-blue-700 dark:hover:text-blue-400 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">About</a>
                </li>
                <li>
                    <a href="/contact"
                        class="hover:text-blue-700 dark:hover:text-blue-400 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">Contact</a>
                </li>
                <li>
                    <a href="/blog"
                        class="hover:text-blue-700 dark:hover:text-blue-400 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">Blog</a>
                </li>
            </ul>

            <div class="flex items-center gap-4 ml-auto">
                <a href="#"
                    class="text-slate-900 text-sm font-semibold hover:text-blue-700 dark:text-slate-50 dark:hover:text-blue-400 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">Log
                    in</a>
                <a href="#"
                    class="py-2 px-3.5 text-sm rounded-md font-semibold cursor-pointer text-white border border-blue-600 bg-blue-600 hover:bg-blue-700 transition-all focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500">Sign
                    up</a>
            </div>
        </div>
    </nav>
</header>

<main class="flex-1 w-full max-w-7xl mx-auto px-4 md:px-8 py-10">
    <div class="w-full mx-auto max-w-md sm:max-w-xl lg:max-w-3xl rounded-xl border border-blue-200 bg-blue-100 p-5 sm:p-8 lg:p-12 shadow-sm">
        <p class="text-sm font-semibold text-blue-700 dark:text-blue-400">Mahasiswa</p>
        <h1 class="mt-2 text-6xl md:text-6xl font-bold tracking-tight">Halo, saya Adhara.</h1>
        <p class="mt-4 max-w-xl text-slate-600 dark:text-slate-400">
            Saya sedang belajar membuat website dengan Laravel dan Tailwind CSS.
            Di sini saya mengumpulkan profil dan catatan belajar saya.
        </p>
        <div class="mt-6 flex flex-col sm:flex-row gap-3">
            <a href="/blog"
                class="flex-1 text-center py-2.5 px-4 text-sm rounded-md font-semibold text-white bg-blue-600 hover:bg-blue-700 transition-all focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500">
                    Lihat blog
            </a>
            <a href="/contact"
                class="flex-1 text-center py-2.5 px-4 text-sm rounded-md font-semibold border border-blue-300 dark:border-blue-800 bg-white dark:bg-transparent hover:bg-blue-50 dark:hover:bg-blue-900 transition-all focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500">
                    Contact saya
            </a>
        </div>
    </div>
    <h2 class="mt-20 text-center text-xl sm:text-2xl font-bold text-slate-900 mx-auto">Hobi saya</h2>

    <div class="mt-4 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
        <div class="bg-white border border-slate-300 rounded-lg overflow-hidden shadow-sm">
            <img src="{{ asset('img/drama-china.jpg') }}" alt="Nonton Drama China" class="h-40 w-full object-cover">
            <div class="p-4">
                <h3 class="text-lg font-semibold text-slate-900">Nonton Drama China</h3>
                <p class="mt-2 text-slate-600">Saya suka menonton drama China sebagai hiburan.</p>
            </div>
        </div>

        <div class="bg-white border border-slate-300 rounded-lg overflow-hidden shadow-sm">
            <img src="{{ asset('img/piano.jpg') }}" alt="Piano" class="h-40 w-full object-cover">
            <div class="p-4">
                <h3 class="text-lg font-semibold text-slate-900">Piano</h3>
                <p class="mt-2 text-slate-600">Saya senang memainkan piano sebagai hobi dan hiburan.</p>
            </div>
        </div>

        <div class="bg-white border border-slate-300 rounded-lg overflow-hidden shadow-sm">
            <img src="{{ asset('img/images.jpg') }}" alt="Tidur" class="h-40 w-full object-cover">
            <div class="p-4">
                <h3 class="text-lg font-semibold text-slate-900">Tidur</h3>
                <p class="mt-2 text-slate-600">Saya menikmati tidur untuk melepas lelah dan memulihkan energi.</p>
            </div>
        </div>
    </div>
</main>


    
    <footer class="bg-white dark:bg-neutral-900 border-t border-slate-300 dark:border-neutral-700 py-8 px-4 md:px-8 mt-16">
        <div class="max-w-7xl mx-auto">
            <p class="text-slate-600 dark:text-slate-400 text-sm">
                © Adhara. Dibuat dengan Laravel dan Tailwind CSS.
            </p>
        </div>
    </footer>

</body>

</html>