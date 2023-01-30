<?php

use App\Http\Controllers\AnggotaController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PinjamController;
use App\Http\Controllers\LoginController;

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
    return view('login.login');
});




Route::group(['middleware' => ['auth']], function () {
Route::get('/dashboard', [DashboardController::class, 'index']);

    // Anggota
Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota.index');
Route::get('/anggota/create', [AnggotaController::class, 'create'])->name('anggota.create');
Route::post('/anggota/store', [AnggotaController::class, 'store'])->name('anggota.store');
Route::get('/anggota/{id}/edit', [AnggotaController::class, 'edit'])->name('anggota.edit');
Route::get('/anggota/{id}', [AnggotaController::class, 'destroy'])->name('anggota.destroy');

//Buku
Route::get('/buku', [BukuController::class, 'index'])->name('buku');
Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');
Route::post('/buku/store', [BukuController::class, 'store'])->name('buku.store');
Route::get('/buku/{id}/edit', [BukuController::class, 'edit'])->name('buku.edit');
Route::get('/buku/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');

//Peminjaman
Route::get('/pinjam', [PinjamController::class, 'index'])->name('pinjam');
Route::get('/pinjam/create', [PinjamController::class, 'create'])->name('pinjam.create');
Route::post('/pinjam/store', [PinjamController::class, 'store'])->name('pinjam.store');
Route::get('/pinjam/{id}/edit', [PinjamController::class, 'edit'])->name('pinjam.edit');
Route::get('/pinjam/{id}', [PinjamController::class, 'destroy'])->name('pinjam.destroy');

});
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
