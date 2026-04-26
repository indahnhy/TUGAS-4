<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hai', function () {
    return 'hai welcome';
});

Route::get('/home', [HomeController::class, 'index']);

Route::get('/redirect', function () {
    return redirect('/home');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/profile-json', function () {
    $user = [
        'nama' => 'indah nurhayati',
        'pekerjaan' => 'mahasiswa',
        'hobi' => 'main'
    ];
    return response()->json($user);
});

Route::resource('posts', PostController::class);

Route::get('/latihan', function () {
    $nama = "indah";
    $nilai = 75;
    return view('latihan1', compact('nama', 'nilai'));
});


Route::get('/greeting', [PostController::class, 'greeting']);
Route::get('/siswa', [PostController::class, 'siswa']);
Route::get('/profile', [PostController::class, 'profile']);

Route::get('/hasil', function () {
    return view('hasil-ujian', ['nilai' => 70]);
});

Route::get('/home-view', [PostController::class, 'home']);
