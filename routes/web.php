<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\industriController;
use App\Http\Controllers\loginController;
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

// Rute Landingpage

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/mitra-perusahaan', function () {
    return view('mitra-perusahaan');
});

Route::get('/mitra-sekolah', function () {
    return view('mitra-sekolah');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// // Rute Admin
// Route::get('/admin-dashboard', function () {
//     return view('admin.dashboard');
// });

Route::middleware('auth')->group(function () {
    Route::get('/admin-dashboard', [adminController::class, 'index'])->name('dashboard');
    Route::get('/data-admin', [adminController::class, 'index'])->name('dataadmin');
    Route::get('/tambah-data-admin', [adminController::class, 'create'])->name('tambahdataadmin');
    Route::post('/simpan-data-admin', [adminController::class, 'store'])->name('simpandataadmin');
    Route::delete('/hapus-data-admin/{id}', [adminController::class, 'destroy'])->name('hapusdataadmin');
    Route::get('/edit-data-admin/{id}', [adminController::class, 'edit'])->name('editdataadmin');
    Route::put('/edit-data-admin/{id}', [adminController::class, 'update'])->name('updatedataadmin');

    Route::get('/data-sekolah', function () {
        return view('admin.dataSekolah');
    });

    Route::get('/tambah-sekolah', function () {
        return view('admin.tambahSekolah');
    });

    Route::get('/edit-sekolah', function () {
        return view('admin.editSekolah');
    });

    Route::get('/data-industri', [industriController::class, 'index'])->name('dataindustri');
    Route::get('/tambah-data-industri', [industriController::class, 'create'])->name('tambahdataindustri');
    Route::post('/simpan-data-industri', [industriController::class, 'store'])->name('simpandataindustri');
    Route::delete('/hapus-data-industri/{id}', [industriController::class, 'destroy'])->name('hapusdataindustri');
    Route::get('/edit-data-industri/{id}', [industriController::class, 'edit'])->name('editdataindustri');
    Route::put('/edit-data-industri/{id}', [industriController::class, 'update'])->name('updatedataindustri');

    Route::get('/data-user', function () {
        return view('admin.dataUser');
    });

    Route::get('/tambah-user', function () {
        return view('admin.tambahuser');
    });

    Route::get('/edit-user', function () {
        return view('admin.edituser');
    });
    Route::get('/laporan-gaji', function () {
        return view('admin.laporanGaji');
    });
    Route::get('/report', function () {
        return view('admin.report');
    });
});

