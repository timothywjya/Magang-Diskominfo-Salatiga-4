<?php

use App\Http\Controllers\ArenaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/beranda', [App\Http\Controllers\MasyarakatController::class, 'home'])->name('home');

Route::get('/peminjaman', [App\Http\Controllers\PeminjamController::class, 'index'])->name('index');


Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::get('/editprofile', function () {
    return view('masyarakat.edit');
});

Route::resource('masyarakat', \App\Http\Controllers\MasyarakatController::class)
    ->middleware('auth');

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);

Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::get('/pinjam/{id}', [App\Http\Controllers\ArenaController::class, 'pinjam'])->name('pinjam');

Route::post('/simpanpinjaman', [App\Http\Controllers\ArenaController::class, 'simpanpinjaman'])->name('Pinjaman');

// Route::get('/detail/{id}', [App\Http\Controllers\ArenaController::class, 'detail'])->name('detail');

Route::get('gor/{foto_gedung}/download', [App\Http\Controllers\GorController::class, 'download'])->name('gor.download');

Route::get('/loginadmin', function () {
        return view('vendor.adminlte.auth.login');
    });

    Route::resource('masyarakat', \App\Http\Controllers\MasyarakatController::class)
    ->middleware('auth');

Route::get('/lupapassword', function () {
        return view('auth.forgot-password');
    });

// Route::get('/gantipassword', function () {
//         return view('masyarakat.ganti-password');
//     });

Route::get('/pinjam/arena/{id}', [App\Http\Controllers\MasyarakatArenaController::class, 'pinjam']);

Route::post('/simpanpinjamanmasyarakat', [App\Http\Controllers\MasyarakatArenaController::class, 'simpanpinjaman'])->name('Pinjaman');

Route::get('/detail/{id}', [App\Http\Controllers\MasyarakatArenaController::class, 'detail'])->name('detail');

Route::get('list/gor/{id}', [App\Http\Controllers\MasyarakatArenaController::class, 'index']);


Route::group(['middleware' => ['auth', 'ceklevel:Admin']], function() {
    Route::resource('users', \App\Http\Controllers\UserController::class)
    ->middleware('auth');

Route::resource('gor', \App\Http\Controllers\GorController::class)
    ->middleware('auth');

Route::get('arena/gor/{id}', [App\Http\Controllers\ArenaController::class, 'index']);

Route::resource('/arena', \App\Http\Controllers\ArenaController::class)
    ->middleware('auth');

Route::get('arena/create/{id}', [App\Http\Controllers\ArenaController::class, 'create']);

Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
    return view('home');
})->name('home');

Route::get('/request', [App\Http\Controllers\PeminjamController::class, 'indexadmin'])->name('indexadmin');

Route::get('konfirmasipinjaman/{id}', [App\Http\Controllers\PeminjamController::class, 'proses']);

Route::post('konfirmasistore/{id}', [App\Http\Controllers\PeminjamController::class, 'konfirmasistore']);
});
