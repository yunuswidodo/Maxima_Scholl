<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\UjianController;

//use RealRashid\SweetAlert\Facades\Alert;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// siswa route
route::get('/', [SiswaController::class, 'index'])->name('index_siswa');
route::get('/tambah_siswa', [SiswaController::class, 'add_siswa'])->name('tambah_siswa');
route::post('/store', [SiswaController::class, 'store']);
route::get('/edit_siswa/{id}', [SiswaController::class, 'edit_siswa'])->name('edit_siswa');
route::put('/update_siswa/{id}', [SiswaController::class, 'update_siswa'])->name('update_siswa');
route::get('/delete_siswa/{id}', [SiswaController::class, 'delete_siswa'])->name('delete_siswa');

// route  matamatapelajaran
route::get('/matapelajaran', [MataPelajaranController::class, 'index'])->name('index_matapelajaran');
route::get('/tambah_matapelajaran', [MataPelajaranController::class, 'add_pelajaran'])->name('tambah_matapelajaran');
route::post('store', [MataPelajaranController::class, 'store']);
route::get('/edit_matapelajaran/{id}', [MataPelajaranController::class, 'edit_matapelajaran'])->name('edit_matapelajaran');
route::put('/update_matapelajaran/{id}', [MataPelajaranController::class, 'update_matapelajaran'])->name('update_matapelajaran');
route::get('/delete_matapelajaran/{id}', [MataPelajaranController::class, 'delete_matapelajaran'])->name('delete_matapelajaran');

// route  ujian 
route::get('/ujian', [UjianController::class, 'index'])->name('index_ujian');
route::get('/tambah_ujian', [UjianController::class, 'add_ujian'])->name('tambah_ujian');

// route peserta
route::get('/peserta', [PesertaController::class, 'index'])->name('peserta');