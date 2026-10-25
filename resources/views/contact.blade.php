<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <h1 class="text-center text-2xl sm:text-3xl font-bold text-slate-900">Hubungi saya</h1>
    <p class="mt-2 text-center text-slate-600">Pilih salah satu cara di bawah ini untuk menghubungi saya.</p>

    <div class="mt-8 grid gap-4 sm:grid-cols-3">
        <a href="https://www.instagram.com/iadhara/" target="_blank" rel="noopener"
               class="block bg-white border border-slate-300 rounded-lg p-5 text-center shadow-sm hover:bg-blue-50 hover:border-blue-300 transition-all focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500">
            <h2 class="text-lg font-semibold text-slate-900">Instagram</h2>
            <p class="mt-1 text-sm text-slate-600">@iadhara</p>
        </a>

        <a href="mailto:itangkelangi@student.ciputra.ac.id"
               class="block bg-white border border-slate-300 rounded-lg p-5 text-center shadow-sm hover:bg-blue-50 hover:border-blue-300 transition-all focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500">
            <h2 class="text-lg font-semibold text-slate-900">Email</h2>
            <p class="mt-1 text-sm text-slate-600 break-all">itangkelangi@student.ciputra.ac.id</p>
        </a>

        <a href="https://youtu.be/yDJGi-jUPLg?si=RycaXRVL9x9zwyJ5" target="_blank" rel="noopener"
               class="block bg-white border border-slate-300 rounded-lg p-5 text-center shadow-sm hover:bg-blue-50 hover:border-blue-300 transition-all focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500">
            <h2 class="text-lg font-semibold text-slate-900">YouTube</h2>
            <p class="mt-1 text-sm text-slate-600">Tonton video saya</p>
        </a>
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