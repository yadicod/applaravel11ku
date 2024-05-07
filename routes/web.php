<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

// Buat route hello dengan view hello
// contoh routing utk mnegarahkan ke view, tanpa melalui controller
Route::get('/hello', function () {
    return view('hello'); // return view('dir.hello'); artinya di views/dir/hello.blade.php
});

// Buat route kabar dengan view kondisi
Route::get('/kabar', function () {
    return view('kondisi');
});

// Buat route nilai dengan view nilai
Route::get('/nilai', function () {
    return view('nilai');
});

// Buat route ke pasien dengan view pasien
Route::get('/pasien', function () {
    return view('pasien');
});

//contoh routing yg mengarahkan ke dirinya sendiri, tanpa view ataupun controller
Route::get('/salam', function () {
    return "Selamat Datang Mahasiswa STTNF 2024";
});


///routing dengan memanfaatkan controller
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/laporan', [DashboardController::class, 'laporan']);
