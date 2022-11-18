<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KelasController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route about (hyperlink), [(controller yang di tuju),(function yang dituju)]
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');

Route::get('/', [App\Http\Controllers\MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('/mahasiswa/{id}/edit', [App\Http\Controllers\MahasiswaController::class, 'edit'])->name('mahasiswa.edit');

Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.delete');

// route untuk kelas
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index');
// route form tambah data
Route::get('/kelas/create', [KelasController::class, 'create'])->name('kelas.create');
// route form simpan data
Route::post('/kelas/store', [KelasController::class, 'store'])->name('kelas.store');
