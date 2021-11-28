<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PesertaController;
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

route::get('/peserta', [PesertaController::class, 'index'])->name('peserta');

