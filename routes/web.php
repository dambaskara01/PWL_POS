<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'index'])->name('home'); // menampilkan halaman awal user
    Route::post('/list', [UserController::class, 'list']); // menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create', [UserController::class, 'create']); // menampilkan halaman form tambah user
    Route::post('/', [UserController::class, 'store']); // menyimpan data user baru
    Route::get('/create_ajax', [UserController::class, 'create_ajax']); // Menampilkan halaman form tambah user Ajax
    Route::post('/ajax', [UserController::class, 'store_ajax']); // Menyimpan data user baru Ajax
    Route::get('/{id}', [UserController::class, 'show']); // menampilkan detail user
    Route::get('/{id}/edit', [UserController::class, 'edit']); // menampilkan halaman form edit user
    Route::put('/{id}', [UserController::class, 'update']); // menyimpan perubahan data user
    Route::delete('/{id}', [UserController::class, 'destroy']); // menghapus data user
});

Route::group(['prefix' => 'level'], function () {
    Route::get('/', [LevelController::class, 'index']); // Menampilkan halaman awal level
    Route::post('/list', [LevelController::class, 'list']); // Menampilkan data level dalam bentuk JSON untuk DataTables
    Route::get('/create', [LevelController::class, 'create']); // Menampilkan halaman form tambah level
    Route::post('/', [LevelController::class, 'store']); // Menyimpan data level baru
    Route::get('/{id}', [LevelController::class, 'show']); // Menampilkan detail level (opsional)
    Route::get('/{id}/edit', [LevelController::class, 'edit']); // Menampilkan halaman form edit level
    Route::put('/{id}', [LevelController::class, 'update']); // Menyimpan perubahan data level
    Route::delete('/{id}', [LevelController::class, 'destroy']); // Menghapus data level
});