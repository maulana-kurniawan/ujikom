<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\KoleksiController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\TransportasiController;

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

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/', [AuthController::class, 'index'])->name('start');
Route::post('login', [AuthController::class, 'loginAction'])->name('login');
Route::get('registration', [AuthController::class, 'register'])->name('registration');
Route::post('register', [AuthController::class, 'registerAction'])->name('register');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('anggota', [AnggotaController::class, 'index'])->name('anggota');
Route::get('tambah-anggota', [AnggotaController::class, 'add'])->name('tambah-anggota');
Route::post('store-anggota', [AnggotaController::class, 'store'])->name('anggota.store');
Route::get('anggota/{anggota}/edit', [AnggotaController::class, 'edit'])->name('anggota.edit');
Route::post('update-anggota/{id}', [AnggotaController::class, 'update'])->name('anggota.update');
Route::post('destroy-anggota/{anggota}', [AnggotaController::class, 'destroy'])->name('anggota.destroy');

Route::get('koleksi', [KoleksiController::class, 'index'])->name('koleksi');
Route::get('tambah-koleksi', [KoleksiController::class, 'add'])->name('tambah-koleksi');
Route::post('store-koleksi', [KoleksiController::class, 'store'])->name('koleksi.store');
Route::get('koleksi/{koleksi}/edit', [KoleksiController::class, 'edit'])->name('koleksi.edit');
Route::post('update-koleksi/{id}', [KoleksiController::class, 'update'])->name('koleksi.update');
Route::post('destroy-koleksi/{koleksi}', [KoleksiController::class, 'destroy'])->name('koleksi.destroy');

Route::get('peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman');
Route::get('tambah-peminjaman', [PeminjamanController::class, 'add'])->name('tambah-peminjaman');
Route::post('store-peminjaman', [PeminjamanController::class, 'store'])->name('peminjaman.store');
Route::get('peminjaman/{peminjaman}/edit', [PeminjamanController::class, 'edit'])->name('peminjaman.edit');
Route::post('update-peminjaman/{id}', [PeminjamanController::class, 'update'])->name('peminjaman.update');
Route::post('destroy-peminjaman/{peminjaman}', [PeminjamanController::class, 'destroy'])->name('peminjaman.destroy');

Route::get('pengembalian', [PengembalianController::class, 'index'])->name('pengembalian');
Route::get('tambah-pengembalian', [PengembalianController::class, 'add'])->name('tambah-pengembalian');
Route::post('store-pengembalian', [PengembalianController::class, 'store'])->name('pengembalian.store');
Route::get('pengembalian/{pengembalian}/edit', [PengembalianController::class, 'edit'])->name('pengembalian.edit');
Route::post('update-pengembalian/{id}', [PengembalianController::class, 'update'])->name('pengembalian.update');
Route::post('destroy-pengembalian/{pengembalian}', [PengembalianController::class, 'destroy'])->name('pengembalian.destroy');

Route::get('transportasi', [TransportasiController::class, 'index'])->name('transportasi');
Route::get('tambah-transportasi', [TransportasiController::class, 'add'])->name('tambah-transportasi');
Route::post('store-transportasi', [TransportasiController::class, 'store'])->name('transportasi.store');
Route::get('transportasi/{transportasi}/edit', [TransportasiController::class, 'edit'])->name('transportasi.edit');
Route::post('update-transportasi/{id}', [TransportasiController::class, 'update'])->name('transportasi.update');
Route::post('destroy-transportasi/{transportasi}', [TransportasiController::class, 'destroy'])->name('transportasi.destroy');
