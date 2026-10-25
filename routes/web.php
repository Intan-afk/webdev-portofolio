<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Adhara']);
});

Route::get('/blog', function () {
    return view('blog', [
        'judul' => 'Belajar Blade Template',
        'tanggal' => '26 Oktober 2026',
        'ringkasan' => 'Catatan tentang cara kerja Blade, komponen, dan layout di Laravel.',
    ]);
});
Route::get('/contact', function () {
    return view('contact');
});
