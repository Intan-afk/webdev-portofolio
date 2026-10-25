<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen flex flex-col">
   <nav class="flex py-2 px-4 md:px-8 min-h-[68px] sticky top-0 z-20 bg-white dark:bg-neutral-900 border-b border-slate-300 dark:border-neutral-700 shadow-sm" aria-label="Main navigation">
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

    <main class="flex-1 w-full max-w-7xl mx-auto px-4 md:px-8 py-10">
        <h1 class="text-center text-2xl sm:text-3xl font-bold text-slate-900">Tentang saya</h1>

        <div class="mt-8 flex flex-col md:flex-row items-center gap-6 bg-white border border-slate-300 rounded-lg p-5 sm:p-6 shadow-sm">
            <img src="{{ asset('img/foto.png') }}" alt="Foto {{ $nama }}"
                 class="h-48 w-48 shrink-0 rounded-lg object-cover bg-blue-100">

            <div class="text-center md:text-left">
                <p class="text-sm font-semibold text-blue-700">Mahasiswa</p>
                <h2 class="mt-1 text-2xl font-bold text-slate-900">{{ $nama }}</h2>
                <p class="mt-3 text-slate-600">
                    Saya sedang belajar membuat website dengan Laravel dan Tailwind CSS.
                    Website ini adalah tempat saya mengumpulkan profil, hobi, dan catatan belajar.
                </p>
            </div>
        </div>

        <h2 class="mt-10 text-center text-xl sm:text-2xl font-bold text-slate-900">Keahlian</h2>

        <ul class="mt-4 flex flex-wrap justify-center gap-2">
            <li class="rounded-full border border-blue-300 bg-blue-100 px-3 py-1 text-sm font-semibold text-blue-800">Tidur</li>
            <li class="rounded-full border border-blue-300 bg-blue-100 px-3 py-1 text-sm font-semibold text-blue-800">Piano</li>
            <li class="rounded-full border border-blue-300 bg-blue-100 px-3 py-1 text-sm font-semibold text-blue-800">Berenang</li>
            <li class="rounded-full border border-blue-300 bg-blue-100 px-3 py-1 text-sm font-semibold text-blue-800">Photo</li>
            <li class="rounded-full border border-blue-300 bg-blue-100 px-3 py-1 text-sm font-semibold text-blue-800">Tetap santai</li>
            <li class="rounded-full border border-blue-300 bg-blue-100 px-3 py-1 text-sm font-semibold text-blue-800">Lari</li>
        </ul>
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