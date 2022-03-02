<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\MataPelajaranController;
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

route::get('/', [SiswaController::class, 'index'])->name('index_siswa');
route::get('/tambah_siswa', [SiswaController::class, 'add_siswa'])->name('tambah_siswa');
route::post('/store', [SiswaController::class, 'store']);
route::get('/edit_siswa/{id}', [SiswaController::class, 'edit_siswa'])->name('edit_siswa');
route::put('/update_siswa/{id}', [SiswaController::class, 'update_siswa'])->name('update_siswa');
route::get('/delete_siswa/{id}', [SiswaController::class, 'delete_siswa'])->name('delete_siswa');
route::get('/peserta', [PesertaController::class, 'index'])->name('peserta');
route::get('/matapelajaran', [MataPelajaranController::class, 'index'])->name('index_matapelajaran');
route::get('/tambah_matapelajaran', [MataPelajaranController::class, 'add_pelajaran'])->name('tambah_matapelajaran');
route::post('store', [MataPelajaranController::class, 'store']);