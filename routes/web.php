<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('users/{id}', function ($id) {});
// Route::post('users/{id}', function ($id) {});
// Route::put('users/{id}', function ($id) {});
// Route::delete('users/{id}', function ($id) {});

Route::get('tambahdata', function () {
    return 'ini laravel saya';
});

Route::get('tampilan/{nilai}', function ($nilai) {
    return 'Nilai saya adalah : ' . $nilai;
});

Route::get('penjumlahan/{nilai1}/{nilai2}', function ($nilai1,$nilai2) {
    return 'Nilai saya adalah : ' . $nilai1 + $nilai2;
});

Route::get('pengurangan/{nilai1}/{nilai2}', function ($nilai1,$nilai2) {
    return 'Nilai saya adalah : ' . $nilai1 - $nilai2;
});

Route::get('perkalian/{nilai1}/{nilai2}', function ($nilai1,$nilai2) {
    return 'Nilai saya adalah : ' . $nilai1 * $nilai2;
});

Route::get('pembagian/{nilai1}/{nilai2}', function ($nilai1,$nilai2) {
    return 'Nilai saya adalah : ' . $nilai1 / $nilai2;
});

Route::get('coba', function () {
    return view('coba');
});

Route::get('template', function () {
    return view('template');
});

Route::get('tabel', function () {
    $data = ['meja', 'kursi', 'pintu', 'pensil', 'lampu', 'buku', 'pulpen'];
    // return view('table', ['data' => $data, 'barang' => $barang]);
    return view('table', compact('data'));
});

// Route::get('siswa', [SiswaController::class, 'index']);
// Route::get('tambahsiswa', [SiswaController::class, 'create']);
// Route::get('tambahsiswa', [SiswaController::class, 'store']);
// Route::get('tambahsiswa', [SiswaController::class, 'show']);

Route::resource('siswa', SiswaController::class)->middleware(['auth', 'admin']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('upload', UploadController::class);
