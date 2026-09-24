<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PengelolaController;
use App\Http\Controllers\ProfilSekolahController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('auth', [AuthController::class, 'auth'])->name('auth');

Route::middleware('checkauth')->group(function(){

    Route::get('/administrator', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/administrator/siswa', [SiswaController::class, 'index']);
    Route::get('/administrator/guru', [GuruController::class, 'index']);
    Route::get('/administrator/galeri', [GaleriController::class, 'index']);
    Route::get('/administrator/berita', [BeritaController::class, 'index']);
    
    Route::get('/administrator/pengelola', [PengelolaController::class, 'index'])->name('pengelola.index');
    Route::get('/administrator/pengelola/create', [PengelolaController::class, 'create'])->name('pengelola.create');
    Route::post('/administrator/pengelola/store', [PengelolaController::class, 'store'])->name('pengelola.store');
    Route::get('/administrator/pengelola/delete/{id}', [PengelolaController::class, 'delete'])->name('pengelola.delete');
    Route::get('/administrator/pengelola/edit/{id}', [PengelolaController::class, 'edit'])->name('pengelola.edit');
    Route::post('/administrator/pengelola/update/{id}', [PengelolaController::class, 'update'])->name('pengelola.update');
    
    Route::get('/administrator/profil-sekolah', [ProfilSekolahController::class, 'index']);

});
