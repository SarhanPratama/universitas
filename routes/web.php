<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dosenController;
use App\Http\Controllers\kelasController;
use App\Http\Controllers\prodiController;
use App\Http\Controllers\ruangController;
use App\Http\Controllers\jadwalController;
use App\Http\Controllers\matkulController;
use App\Http\Controllers\jenjangController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\fakultasController;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\tahunAkademikController;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('welcome')->with('title', '')
        ->with('form', '');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::resource('fakultas', fakultasController::class)->middleware('auth');

Route::resource('jenjang', jenjangController::class)->middleware('auth');

Route::resource('kelas', kelasController::class)->middleware('auth');

Route::resource('prodi', prodiController::class)->middleware('auth');

Route::resource('ruang', ruangController::class)->middleware('auth');

Route::resource('tahun_akademik', tahunAkademikController::class)->middleware('auth');

Route::resource('mahasiswa', mahasiswaController::class)->middleware('auth');

Route::resource('dosen', dosenController::class)->middleware('auth');

Route::resource('matkul', matkulController::class)->middleware('auth');

Route::resource('jadwal', jadwalController::class)->middleware('auth');

Route::resource('produk', produkController::class)->middleware('auth');

require __DIR__ . '/auth.php';
