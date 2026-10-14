<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\daftarBuku;

// 3.1 Route Sederhana (Closure)
Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hallo, Selamat Datang di Laravel 13!';
});

// Arrow Function (Lebih ringkas)
Route::get('/waktu', fn() => now()->format('d-m-Y H:i:s'));


// 3.2 Route dengan parameter

// Parameter Wajib
Route::get('/profil/{nama}', function (string $nama) {
    return "Hallo, {$nama}!";
});

// Parameter opsional (beri nilai default)
Route::get('/kategori/{nama?}', function (?string $nama = 'dimas') {
    return "Menampilkan Kategori: {$nama}";
});

// Lebih dari satu parameter
Route::get('/kelas/{kode}/mahasiswa/{nim}', function (string $kode, string $nim) {
    return "Kelas {$kode}, NIM {$nim}";
});

// 3.3 Pembatasan parameter (constraint)
Route::get('/artikel/{id}', function (int $id) {
    return "Artikel Nomor {$id}";
})->whereNumber('id');

Route::get('/pengguna/{username}', function (string $username) {
    return "Pengguna: {$username}";
})->whereAlpha('username');

Route::get('/kode/{kode}', function (string $kode) {
    return "Kode: {$kode}";
})->where('kode', '[A-Z]{3}[0-9]{2}');


// 3.4 Route langsung ke View dan Named route

// Route::view tida memerlukan clouser
Route::view('/tentang', 'tentang')->name('tentang');

Route::get('/kontak', function () {
    return view('kontak', ['email' => 'info@kampus.ac.id']);
})->name('kontak');


Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/produk/{id}', [ProdukController::class, 'show'])->name('produk.show');
Route::resource('produk', ProdukController::class);

Route::get('/profil', [MahasiswaController::class, 'profil'])->name('mahasiswa.profil');
Route::get('/daftar', [MahasiswaController::class, 'daftar'])->name('mahasiswa.mahasiswaa');
Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'show'])->name('mahasiswa.detail');

Route::get('/daftarbuku', [daftarBuku::class, 'index'])->name('daftarBuku');
