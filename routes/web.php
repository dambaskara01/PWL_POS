<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::pattern('id', '[0-9]+'); // Artinya, ketika ada parameter {id}, maka harus berupa angka

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'postlogin']);
Route::get('logout', [AuthController::class, 'logout'])->middleware('auth');

// Bungkus semua route lainnya dalam middleware auth
Route::middleware(['auth'])->group(function () {
    Route::get('/', [WelcomeController::class, 'index']);

    Route::get('/change-photo', [ProfileController::class, 'changePhoto'])->name('change-photo');
     Route::post('/update-photo', [ProfileController::class, 'updatePhoto'])->name('update-photo');

    // Route User
    Route::prefix('user')->group(function () {
        Route::get('/', [UserController::class, 'index']);
        Route::post('/list', [UserController::class, 'list']);
    
        Route::get('/create', [UserController::class, 'create']);
        Route::post('/', [UserController::class, 'store']);
        Route::get('/{id}', [UserController::class, 'show']);
        Route::get('/{id}/edit', [UserController::class, 'edit']);
        Route::put('/{id}', [UserController::class, 'update']);
        Route::delete('/{id}', [UserController::class, 'destroy']);
    
        Route::get('/create_ajax', [UserController::class, 'create_ajax']);
        Route::post('/store_ajax', [UserController::class, 'store_ajax']);
        Route::get('/{id}/show_ajax', [UserController::class, 'show_ajax']);
        Route::get('/{id}/edit_ajax', [UserController::class, 'edit_ajax']);
        Route::put('/{id}/update_ajax', [UserController::class, 'update_ajax']);
        Route::get('/{id}/delete_ajax', [UserController::class, 'confirm_ajax']);
        Route::delete('/{id}/delete_ajax', [UserController::class, 'delete_ajax']);
        
        Route::get('/import', [UserController::class, 'import']); 
        Route::post('/import_ajax', [UserController::class, 'import_ajax']);
        Route::get('/export_excel', [UserController::class, 'export_excel'])->name('user.export_excel');
        Route::get('/export_pdf', [UserController::class, 'export_pdf'])->name('user.export_pdf');
    });


    // Route Level
    Route::prefix('level')->middleware(['authorize:ADM, MNG'])->group(function () {

            Route::get('/', [LevelController::class, 'index']);
            Route::post('/list', [LevelController::class, 'list']);
        
            Route::get('/create', [LevelController::class, 'create']);
            Route::post('/', [LevelController::class, 'store']);
            Route::get('/{id}', [LevelController::class, 'edit']); // Untuk tampilkan form edit
            Route::put('/{id}', [LevelController::class, 'update']);
            Route::delete('/{id}', [LevelController::class, 'destroy']);
        
            Route::get('/create_ajax', [LevelController::class, 'create_ajax']);
            Route::post('/store_ajax', [LevelController::class, 'store_ajax']);
            Route::get('/{id}/edit_ajax', [LevelController::class, 'edit_ajax']);
            Route::put('/{id}/update_ajax', [LevelController::class, 'update_ajax']);
            Route::get('/{id}/delete_ajax', [LevelController::class, 'confirm_ajax']);
            Route::delete('/{id}/delete_ajax', [LevelController::class, 'delete_ajax']);
        
            Route::get('/import', [LevelController::class, 'import']); 
            Route::post('/import_ajax', [LevelController::class, 'import_ajax']);
            Route::get('/export_excel', [LevelController::class, 'export_excel']);
            Route::get('/export_pdf', [LevelController::class, 'export_pdf']);
        
    });

    Route::prefix('barang')->group(function () {
        Route::get('/', [BarangController::class, 'index'])->name('barang.index');
        Route::post('/list', [BarangController::class, 'list'])->name('barang.list');
    
        Route::get('/create', [BarangController::class, 'create'])->name('barang.create');
        Route::post('/store', [BarangController::class, 'store'])->name('barang.store');
        Route::get('/{id}', [BarangController::class, 'show'])->name('barang.show');
        Route::get('/{id}/edit', [BarangController::class, 'edit'])->name('barang.edit');
        Route::put('/{id}/update', [BarangController::class, 'update'])->name('barang.update');
        Route::delete('/{id}/destroy', [BarangController::class, 'destroy'])->name('barang.destroy');
    
        Route::get('/create_ajax', [BarangController::class, 'create_ajax'])->name('barang.create_ajax');
        Route::post('/store_ajax', [BarangController::class, 'store_ajax'])->name('barang.store_ajax');
        Route::get('/list_ajax', [BarangController::class, 'list_ajax'])->name('barang.list_ajax');
        Route::get('/{id}/show_ajax', [BarangController::class, 'show_ajax'])->name('barang.show_ajax');
        Route::get('/{id}/edit_ajax', [BarangController::class, 'edit_ajax'])->name('barang.edit_ajax');
        Route::put('/{id}/update_ajax', [BarangController::class, 'update_ajax'])->name('barang.update_ajax');
        Route::get('/{id}/delete_ajax', [BarangController::class, 'confirm_ajax'])->name('barang.confirm_ajax');
        Route::delete('/{id}/delete_ajax', [BarangController::class, 'delete_ajax'])->name('barang.delete_ajax');

        Route::get('/import', [BarangController::class, 'import'])->name('barang.import'); 
        Route::post('/import_ajax', [BarangController::class, 'import_ajax'])->name('barang.import_ajax');
        Route::get('/export_excel', [BarangController::class, 'export_excel'])->name('barang.export_excel'); // export excel
        Route::get('/export_pdf', [BarangController::class, 'export_pdf'])->name('barang.export_pdf'); // export pdf
    });
    
    

    Route::prefix('kategori')->group(function () {
        Route::get('/', [KategoriController::class, 'index']); 
        Route::post('/list', [KategoriController::class, 'list']); 
    
        Route::get('/create', [KategoriController::class, 'create']); 
        Route::post('/', [KategoriController::class, 'store']);
        Route::get('/{id}', [KategoriController::class, 'show']); 
        Route::get('/{id}/edit', [KategoriController::class, 'edit']); 
        Route::put('/{id}', [KategoriController::class, 'update']); 
        Route::delete('/{id}', [KategoriController::class, 'destroy']); 
    
        Route::get('/create_ajax', [KategoriController::class, 'create_ajax'])->name('kategori.create_ajax');
        Route::get('/edit_ajax', [KategoriController::class, 'edit_ajax'])->name('kategori.edit_ajax');
        Route::get('/show_ajax', [KategoriController::class, 'show_ajax'])->name('kategori.show_ajax');
        Route::get('/delete_ajax', [KategoriController::class, 'confirm_ajax'])->name('kategori.confirm_ajax');
        Route::delete('/delete_ajax', [KategoriController::class, 'delete_ajax'])->name('kategori.delete_ajax');
        Route::get('/list_ajax', [KategoriController::class, 'list_ajax'])->name('kategori.list_ajax');
        Route::post('/store_ajax', [KategoriController::class, 'store_ajax'])->name('kategori.store_ajax');
        Route::put('/update_ajax', [KategoriController::class, 'update_ajax'])->name('kategori.update_ajax');
    
        Route::get('/import', [KategoriController::class, 'import']); 
        Route::post('/import_ajax', [KategoriController::class, 'import_ajax']);
        Route::get('/export_excel', [KategoriController::class, 'export_excel'])->name('kategori.export_excel');
        Route::get('/export_pdf', [KategoriController::class, 'export_pdf'])->name('kategori.export_pdf');
    });
    

    Route::prefix('supplier')->group(function () {
        Route::get('/', [SupplierController::class, 'index']);
        Route::post('/list', [SupplierController::class, 'list']);
    
        Route::get('/create', [SupplierController::class, 'create']);
        Route::post('/', [SupplierController::class, 'store']);
        Route::get('/{id}', [SupplierController::class, 'show']);
        Route::get('/{id}/edit', [SupplierController::class, 'edit']);
        Route::put('/{id}', [SupplierController::class, 'update']);
        Route::delete('/{id}', [SupplierController::class, 'destroy']);

        Route::get('/create_ajax', [SupplierController::class, 'create_ajax']);
        Route::post('/store_ajax', [SupplierController::class, 'store_ajax']);
        Route::get('/{id}/edit_ajax', [SupplierController::class, 'edit_ajax']);
        Route::put('/{id}/update_ajax', [SupplierController::class, 'update_ajax']);
        Route::get('/{id}/delete_ajax', [SupplierController::class, 'confirm_ajax']);
        Route::delete('/{id}/delete_ajax', [SupplierController::class, 'delete_ajax']);
    
        Route::get('/import', [SupplierController::class, 'import']);
        Route::post('/import_ajax', [SupplierController::class, 'import_ajax']);
        Route::get('/export_excel', [SupplierController::class, 'export_excel']);
        Route::get('/export_pdf', [SupplierController::class, 'export_pdf']);
    });
    

    Route::prefix('stok')->group(function () {
        Route::get('/', [StokController::class, 'index']);
        Route::post('/list', [StokController::class, 'list']);

        Route::get('/create', [StokController::class, 'create']);
        Route::post('/', [StokController::class, 'store']);
        Route::get('/{id}', [StokController::class, 'show']);
        Route::get('/{id}/edit', [StokController::class, 'edit']);
        Route::put('/{id}', [StokController::class, 'update']);
        Route::delete('/{id}', [StokController::class, 'destroy']);

        Route::get('/create_ajax', [StokController::class, 'create_ajax']);
        Route::post('/store_ajax', [StokController::class, 'store_ajax']);
        Route::get('/{id}/show_ajax', [StokController::class, 'show_ajax']);
        Route::get('/{id}/edit_ajax', [StokController::class, 'edit_ajax']);
        Route::put('/{id}/update_ajax', [StokController::class, 'update_ajax']);
        Route::get('/{id}/delete_ajax', [StokController::class, 'confirm_ajax']);
        Route::delete('/{id}/delete_ajax', [StokController::class, 'delete_ajax']);
    
        Route::get('/import', [StokController::class, 'import']);
        Route::post('/import_ajax', [StokController::class, 'import_ajax']);
        Route::get('/export_excel', [StokController::class, 'export_excel']);
        Route::get('/export_pdf', [StokController::class, 'export_pdf']);
    });
    

    Route::prefix('penjualan')->group(function () {
        Route::get('/', [PenjualanController::class, 'index']);
        Route::post('/list', [PenjualanController::class, 'list']);

        Route::get('/create', [PenjualanController::class, 'create']);
        Route::post('/', [PenjualanController::class, 'store']);
        Route::get('/{id}/edit', [PenjualanController::class, 'edit']);
        Route::put('/{id}', [PenjualanController::class, 'update']);
        Route::delete('/{id}', [PenjualanController::class, 'destroy']);

        Route::get('/create_ajax', [PenjualanController::class, 'create_ajax']);
        Route::get('/{id}/show_ajax', [PenjualanController::class, 'show_ajax']); // Pastikan rute ini tidak bentrok
        Route::post('/store_ajax', [PenjualanController::class, 'store_ajax']);
        Route::get('/{id}/edit_ajax', [PenjualanController::class, 'edit_ajax']);
        Route::put('/{id}/update_ajax', [PenjualanController::class, 'update_ajax']);
        Route::get('/{id}/delete_ajax', [PenjualanController::class, 'confirm_ajax']);
        Route::delete('/{id}/delete_ajax', [PenjualanController::class, 'delete_ajax']);

        Route::get('/import', [PenjualanController::class, 'import']);
        Route::post('/import_ajax', [PenjualanController::class, 'import_ajax']);
        Route::get('/export_excel', [PenjualanController::class, 'export_excel'])->name('penjualan.export_excel');
        Route::get('/export_pdf', [PenjualanController::class, 'export_pdf'])->name('penjualan.export_pdf');
    });
    
    
    // Tambahkan route lainnya di sini
});
