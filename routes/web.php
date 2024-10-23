<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PenjualanController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index'])->name('landing');

Route::pattern('id', '[0-9]+');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'postlogin']);
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'postregister']);
Route::get('logout', [AuthController::class, 'logout'])->middleware('auth');

// Keep this route to point to the WelcomeController

// Route::resource('level', LevelController::class);

// Route::group(['prefix' => 'user'], function() {
//     Route::get('/', [UserController::class, 'index']);              // menampilkan halaman awal user
//     Route::post('/list', [UserController::class, 'list']);          // menampilkan data user dalam bentuk json untuk datatables
//     Route::get('/create', [UserController::class, 'create']);       // menampilkan halaman form tambah user
//     Route::post('/', [UserController::class, 'store']);             // menyimpan data user baru
//     Route::get('/create_ajax', [UserController::class, 'create_ajax']); // Menampilkan halaman form tambah user Ajax
//     Route::post('/ajax', [UserController::class, 'store_ajax']); // Menyimpan data user baru Ajax
//     Route::get('/{id}', [UserController::class, 'show']);           // menampilkan detail user
//     Route::get('/{id}/edit', [UserController::class, 'edit']);     // menampilkan halaman form edit user
//     Route::put('/{id}', [UserController::class, 'update']);         // menyiapkan perubahan data user
//     Route::get('/{id}/edit_ajax', [UserController::class, 'edit_ajax']); // Menampilkan halaman form edit user Ajax 
//     Route::put('/{id}/update_ajax', [UserController::class, 'update_ajax']); // Menyimpan perubahan data user Ajax
//     Route::get('/{id}/delete_ajax', [UserController::class, 'confirm_ajax']); // Untuk tampilkan form confirm delete user Ajax
//     Route::delete('/{id}/delete_ajax', [UserController::class, 'delete_ajax']); // Untuk hapus data user Ajax
//     Route::delete('/{id}', [UserController::class, 'destroy']);     // menghapus data user
// });


// Route::group(['prefix' => 'level'], function() {
//     Route::get('/', [LevelController::class, 'index']);             
//     Route::post('/list', [LevelController::class, 'list']);         
//     Route::get('/create', [LevelController::class, 'create']);      
//     Route::get('/create_ajax', [LevelController::class, 'create_ajax']); 
//     Route::post('/ajax', [LevelController::class, 'store_ajax']); 
//     Route::post('/', [LevelController::class, 'store']);             
//     Route::get('/{id}', [LevelController::class, 'show']);         
//     Route::get('/{id}/edit', [LevelController::class, 'edit']);    
//     Route::put('/{id}', [LevelController::class, 'update']);      
//     Route::get('/{id}/edit_ajax', [LevelController::class, 'edit_ajax']); 
//     Route::put('/{id}/update_ajax', [LevelController::class, 'update_ajax']); 
//     Route::get('/{id}/delete_ajax', [LevelController::class, 'confirm_ajax']); 
//     Route::delete('/{id}/delete_ajax', [LevelController::class, 'delete_ajax']); 
//     Route::delete('/{id}', [LevelController::class, 'destroy']);     
// });

// Route::group(['prefix' => 'kategori'], function() {
//     Route::get('/', [KategoriController::class, 'index']);              // menampilkan halaman awal kategori
//     Route::post('/list', [KategoriController::class, 'list']);          // menampilkan data kategori dalam bentuk json untuk datatables
//     Route::get('/create', [KategoriController::class, 'create']);       // menampilkan halaman form tambah kategori
//     Route::get('/create_ajax', [KategoriController::class, 'create_ajax']); // Menampilkan halaman form tambah kategori Ajax
//     Route::post('/ajax', [KategoriController::class, 'store_ajax']); // Menyimpan data kategori baru Ajax
//     Route::post('/', [KategoriController::class, 'store']);             // menyimpan data kategori baru
//     Route::get('/{id}', [KategoriController::class, 'show']);           // menampilkan detail kategori
//     Route::get('/{id}/edit', [KategoriController::class, 'edit']);     // menampilkan halaman form edit kategori
//     Route::put('/{id}', [KategoriController::class, 'update']);         // menyiapkan perubahan data kategori
//     Route::get('/{id}/edit_ajax', [KategoriController::class, 'edit_ajax']); // Menampilkan halaman form edit kategori Ajax 
//     Route::put('/{id}/update_ajax', [KategoriController::class, 'update_ajax']); // Menyimpan perubahan data kategori Ajax
//     Route::get('/{id}/delete_ajax', [KategoriController::class, 'confirm_ajax']); // Untuk tampilkan form confirm delete kategori Ajax
//     Route::delete('/{id}/delete_ajax', [KategoriController::class, 'delete_ajax']); // Untuk hapus data kategori Ajax
//     Route::delete('/{id}', [KategoriController::class, 'destroy']);     // menghapus data kategori
// });
// Route::group(['prefix' => 'barang'], function() {
//     Route::get('/', [BarangController::class, 'index']);              // menampilkan halaman awal barang
//     Route::post('/list', [BarangController::class, 'list']);          // menampilkan data barang dalam bentuk json untuk datatables
//     Route::get('/create', [BarangController::class, 'create']);       // menampilkan halaman form tambah barang
//     Route::get('/create_ajax', [BarangController::class, 'create_ajax']); // Menampilkan halaman form tambah barang Ajax
//     Route::post('/ajax', [BarangController::class, 'store_ajax']); // Menyimpan data barang baru Ajax
//     Route::post('/', [BarangController::class, 'store']);             // menyimpan data barang baru
//     Route::get('/{id}', [BarangController::class, 'show']);           // menampilkan detail barang
//     Route::get('/{id}/edit', [BarangController::class, 'edit']);     // menampilkan halaman form edit barang
//     Route::put('/{id}', [BarangController::class, 'update']);         // menyiapkan perubahan data barang
//     Route::get('/{id}/edit_ajax', [BarangController::class, 'edit_ajax']); // Menampilkan halaman form edit barang Ajax 
//     Route::put('/{id}/update_ajax', [BarangController::class, 'update_ajax']); // Menyimpan perubahan data barang Ajax
//     Route::get('/{id}/delete_ajax', [BarangController::class, 'confirm_ajax']); // Untuk tampilkan form confirm delete barang Ajax
//     Route::delete('/{id}/delete_ajax', [BarangController::class, 'delete_ajax']); // Untuk hapus data barang Ajax
//     Route::delete('/{id}', [BarangController::class, 'destroy']);     // menghapus data barang
//     Route::get('/', [BarangController::class, 'index']);              // menampilkan halaman awal barang
//     Route::post('/list', [BarangController::class, 'list']); 
// });
// Route::group(['prefix' => 'supplier'], function() {
//     Route::get('/', [SupplierController::class, 'index']);              // menampilkan halaman awal supplier
//     Route::post('/list', [SupplierController::class, 'list']);          // menampilkan data supplier dalam bentuk json untuk datatables
//     Route::get('/create', [SupplierController::class, 'create']);       // menampilkan halaman form tambah supplier
//     Route::get('/create_ajax', [SupplierController::class, 'create_ajax']); // Menampilkan halaman form tambah supplier Ajax
//     Route::post('/ajax', [SupplierController::class, 'store_ajax']); // Menyimpan data supplier baru Ajax
//     Route::post('/', [SupplierController::class, 'store']);             // menyimpan data supplier baru
//     Route::get('/{id}', [SupplierController::class, 'show']);           // menampilkan detail supplier
//     Route::get('/{id}/edit', [SupplierController::class, 'edit']);     // menampilkan halaman form edit supplier
//     Route::put('/{id}', [SupplierController::class, 'update']);         // menyiapkan perubahan data supplier
//     Route::get('/{id}/edit_ajax', [SupplierController::class, 'edit_ajax']); // Menampilkan halaman form edit supplier Ajax 
//     Route::put('/{id}/update_ajax', [SupplierController::class, 'update_ajax']); // Menyimpan perubahan data supplier Ajax
//     Route::get('/{id}/delete_ajax', [SupplierController::class, 'confirm_ajax']); // Untuk tampilkan form confirm delete supplier Ajax
//     Route::delete('/{id}/delete_ajax', [SupplierController::class, 'delete_ajax']); // Untuk hapus data supplier Ajax
//     Route::delete('/{id}', [SupplierController::class, 'destroy']);     // menghapus data supplier
// });

Route::middleware(['auth'])->group(function(){ 
    Route::get('/dashboard', [WelcomeController::class, 'index']);

    Route::middleware(['authorize:ADM'])->group(function(){
        Route::get('/user', [UserController::class, 'index']);
        Route::post('/user/list', [UserController::class, 'list']); 
        Route::get('/user/create_ajax', [UserController::class, 'create_ajax']);
        Route::post('/user_ajax', [UserController::class, 'store_ajax']);
        Route::get('/user/{id}/edit_ajax', [UserController::class, 'edit_ajax']);
        Route::put('/user/{id}/update_ajax', [UserController::class, 'update_ajax']);
        Route::get('/user/{id}/delete_ajax', [UserController::class, 'confirm_ajax']);
        Route::get('/user/export_excel', [UserController::class, 'export_excel']);
        Route::get('/user/export_pdf', [UserController::class, 'export_pdf']);
        Route::get('/user/{id}/show_ajax', [UserController::class, 'show_ajax']);
    });
    Route::middleware(['authorize:ADM,MNG'])->group(function(){
        Route::get('/barang', [BarangController::class, 'index']);
        Route::post('/barang/list', [BarangController::class, 'list']); 
        Route::get('/barang/create_ajax', [BarangController::class, 'create_ajax']);
        Route::post('/barang_ajax', [BarangController::class, 'store_ajax']);
        Route::get('/barang/{id}/edit_ajax', [BarangController::class, 'edit_ajax']);
        Route::put('/barang/{id}/update_ajax', [BarangController::class, 'update_ajax']);
        Route::get('/barang/{id}/delete_ajax', [BarangController::class, 'confirm_ajax']);
        Route::delete('/barang/{id}/delete_ajax', [BarangController::class, 'delete_ajax']);
        Route::get('/barang/import', [BarangController::class, 'import']);
        Route::post('/barang/import_ajax', [BarangController::class, 'import_ajax']); 
        Route::get('/barang/export_excel', [BarangController::class, 'export_excel']);
        Route::get('/barang/export_pdf', [BarangController::class, 'export_pdf']);
        Route::get('/barang/{id}/show_ajax', [BarangController::class, 'show_ajax']);
    });
    Route::middleware(['authorize:ADM'])->group(function(){
        Route::get('/kategori', [KategoriController::class, 'index']);
        Route::post('/kategori/list', [KategoriController::class, 'list']); 
        Route::get('/kategori/create_ajax', [KategoriController::class, 'create_ajax']);
        Route::post('/kategori_ajax', [KategoriController::class, 'store_ajax']);
        Route::get('/kategori/{id}/edit_ajax', [KategoriController::class, 'edit_ajax']);
        Route::put('/kategori/{id}/update_ajax', [KategoriController::class, 'update_ajax']);
        Route::get('/kategori/{id}/delete_ajax', [KategoriController::class, 'confirm_ajax']);
        Route::delete('/kategori/{id}/delete_ajax', [KategoriController::class, 'delete_ajax']);
        Route::get('/kategori/export_excel', [KategoriController::class, 'export_excel']);
        Route::get('/kategori/export_pdf', [KategoriController::class, 'export_pdf']);
        Route::get('/kategori/{id}/show_ajax', [KategoriController::class, 'show_ajax']);
    });
    Route::middleware(['authorize:ADM'])->group(function(){
        Route::get('/level', [LevelController::class, 'index']);
        Route::post('/level/list', [LevelController::class, 'list']); 
        Route::get('/level/create_ajax', [LevelController::class, 'create_ajax']);
        Route::post('/level_ajax', [LevelController::class, 'store_ajax']);
        Route::get('/level/{id}/show_ajax', [LevelController::class, 'show_ajax']);
        Route::get('/level/{id}/edit_ajax', [LevelController::class, 'edit_ajax']);
        Route::put('/level/{id}/update_ajax', [LevelController::class, 'update_ajax']);
        Route::get('/level/{id}/delete_ajax', [LevelController::class, 'confirm_ajax']);
        Route::delete('/level/{id}/delete_ajax', [LevelController::class, 'delete_ajax']);
        Route::get('/level/export_excel', [LevelController::class, 'export_excel']);
        Route::get('/level/export_pdf', [LevelController::class, 'export_pdf']);
    });
    Route::middleware(['authorize:ADM,MNG,STF'])->group(function(){
        Route::get('/supplier', [SupplierController::class, 'index']);
        Route::post('/supplier/list', [SupplierController::class, 'list']); 
        Route::get('/supplier/create_ajax', [SupplierController::class, 'create_ajax']);
        Route::post('/supplier_ajax', [SupplierController::class, 'store_ajax']);
        Route::get('/supplier/{id}/edit_ajax', [SupplierController::class, 'edit_ajax']);
        Route::put('/supplier/{id}/update_ajax', [SupplierController::class, 'update_ajax']);
        Route::get('/supplier/{id}/delete_ajax', [SupplierController::class, 'confirm_ajax']);
        Route::delete('/supplier/{id}/delete_ajax', [SupplierController::class, 'delete_ajax']);
        Route::get('/supplier/export_excel', [SupplierController::class, 'export_excel']);
        Route::get('/supplier/export_pdf', [SupplierController::class, 'export_pdf']);
        Route::get('/supplier/{id}/show_ajax', [SupplierController::class, 'show_ajax']);
    });
     Route::middleware(['authorize:ADM,MNG,STF'])->group(function () {
            Route::get('/stok', [StokController::class, 'index']);              // menampilkan halaman awal stok
            Route::post('/stok/list', [StokController::class, 'list']);          // menampilkan data stok dalam bentuk json untuk datatables
            // Route::get('/create', [StokController::class, 'create']);       // menampilkan halaman form tambah stok
            Route::get('/stok/create_ajax', [StokController::class, 'create_ajax']); // Menampilkan halaman form tambah supplier Ajax
            Route::post('/stok/ajax', [StokController::class, 'store_ajax']); // Menyimpan data stok baru Ajax
            Route::get('/stok/{id}/edit_ajax', [StokController::class, 'edit_ajax']); // Menampilkan halaman form edit stok Ajax 
            Route::put('/stok/{id}/update_ajax', [StokController::class, 'update_ajax']); // Menyimpan perubahan data stok Ajax
            Route::get('/stok/{id}/delete_ajax', [StokController::class, 'confirm_ajax']); // Untuk tampilkan form confirm delete stok Ajax
            Route::delete('/stok/{id}/delete_ajax', [StokController::class, 'delete_ajax']); // Untuk hapus data stok Ajax
            Route::get('/stok/{id}/show_ajax', [StokController::class, 'show_ajax']);
            Route::get('/stok/export_excel', [StokController::class, 'export_excel']);
            Route::get('/stok/export_pdf', [StokController::class, 'export_pdf']);
    });
    Route::middleware(['authorize:ADM,MNG,STF'])->group(function () {
        Route::get('/profile', [ProfileController::class, 'index']);
        Route::post('/profile/update_profile', [ProfileController::class, 'update_profile']);
        Route::put('/profile/update_pengguna/{id}', [ProfileController::class, 'update_pengguna']);
        Route::put('/profile/update_password/{id}', [ProfileController::class, 'update_password']);
    });
    Route::middleware(['authorize:ADM,MNG,STF'])->group(function () {
        Route::get('/penjualan', [PenjualanController::class, 'index']);
        Route::post('/penjualan/list', [PenjualanController::class, 'list'])->name('penjualan.list');
        Route::get('/penjualan/create_ajax', [PenjualanController::class, 'create_ajax']);
        Route::post('/penjualan/store_ajax', [PenjualanController::class, 'store_ajax']);
        Route::get('/penjualan/{id}/show_ajax', [PenjualanController::class, 'show_ajax']);
        Route::get('/penjualan/{id}/edit_ajax', [PenjualanController::class, 'edit_ajax']);
        Route::put('/penjualan/{id}/update_ajax', [PenjualanController::class, 'update_ajax']);
        Route::get('/penjualan/{id}/delete_ajax', [PenjualanController::class, 'confirm_ajax']);
        Route::delete('/penjualan/{id}/delete_ajax', [PenjualanController::class, 'delete_ajax']);
        Route::post('/penjualan/import_ajax', [PenjualanController::class, 'import_ajax']);
        Route::get('/penjualan/export_excel', [PenjualanController::class, 'export_excel']);
        Route::get('/penjualan/export_pdf', [PenjualanController::class, 'export_pdf']);
    });
});