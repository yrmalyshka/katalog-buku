<?php

// use App\Http\Controllers\BookController;
use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;

// Kalau buka halaman utama, langsung arahkan ke /books
// Route::redirect('/', '/books');
Route::redirect('/', '/karyawan');

// Route::get('/books', [BookController::class, 'index'])->name('books.index');
// Route::post('/books', [BookController::class, 'store'])->name('books.store');

// rute untuk karyawan
Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');
Route::get('/karyawan/create', [KaryawanController::class, 'create'])->name('karyawan.create');
Route::post('/karyawan', [KaryawanController::class, 'store'])->name('karyawan.store');
Route::get('/karyawan/{id}/edit', [KaryawanController::class, 'edit'])->name('karyawan.edit');
Route::put('/karyawan/{id}', [KaryawanController::class, 'update'])->name('karyawan.update');
Route::delete('/karyawan/{id}', [KaryawanController::class, 'destroy'])->name('karyawan.destroy');
