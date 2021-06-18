<?php

use App\Http\Livewire\Pages\Denda;
use App\Http\Livewire\Pages\Home;
use App\Http\Livewire\Pages\Koleksi;
use App\Http\Livewire\Pages\Koleksi\Detail;
use App\Http\Livewire\Pages\Kontak;
use App\Http\Livewire\Pages\Pembayaran;
use App\Http\Livewire\Pages\Peminjaman;
use App\Http\Livewire\Pages\Usulan;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Home::class)->name('home');
Route::get('/koleksi', Koleksi::class)->name('koleksi');
Route::get('/koleksi/detail/{id}', Detail::class)->name('koleksi.detail');

Route::middleware(['auth', 'checkRole:user'])->group(function () {
    Route::get('/peminjaman', Peminjaman::class)->name('peminjaman');
    Route::get('/pembayaran', Pembayaran::class)->name('pembayaran');
    Route::get('/denda', Denda::class)->name('denda');
});
Route::get('/usulan', Usulan::class)->name('usulan');
Route::get('/kontak-kami', Kontak::class)->name('kontak');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
