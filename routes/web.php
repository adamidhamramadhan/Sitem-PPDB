<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PerangkinganController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/registrasi', [AuthController::class, 'registrasi'])->name('register');
Route::post('/proses_registrasi', [AuthController::class, 'proses_registrasi'])->name('register.post');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::get('/admin', [PendaftaranController::class, 'jumlah_pendaftar'])->name('dashboard.admin');
        Route::get('/pendaftaran-admin', [PendaftaranController::class, 'view_data_formulir'])->name('pendaftaran.admin');
        Route::get('/pendaftaran-admin/tidak-lolos', [PendaftaranController::class, 'view_data_formulir2'])->name('pendaftaran.admin2');
        Route::get('/pendaftaran-admin/lolos', [PendaftaranController::class, 'view_data_formulir3'])->name('pendaftaran.admin3');
        Route::get('/pendaftaran-admin/{id}', [PendaftaranController::class, 'view_detail_pendaftaran'])->name('pendaftaran.admin.detail');
        Route::get('/pendaftaran-admin/validasi/{id}', [PendaftaranController::class, 'view_validasi_pendaftaran'])->name('pendaftaran.admin.validasi');
        Route::put('/pendaftaran-admin/validasi/{id}', [PendaftaranController::class, 'edit_formulir_pendaftaran'])->name('pendaftaran.admin.edit');
        Route::get('/pendaftaran-admin/download-akte/{nama_foto}', [PendaftaranController::class, 'download_foto_akte'])->name('download.foto.akte');
        Route::get('/pendaftaran-admin/download-rapot/{nama_foto}', [PendaftaranController::class, 'download_rapot'])->name('download.rapot');
        Route::get('/pendaftaran-admin/download-ijazah/{nama_foto}', [PendaftaranController::class, 'download_ijazah'])->name('download.ijazah');
        Route::resource('/perangkingan', PerangkinganController::class);
        Route::get('/cetak-laporan', [PendaftaranController::class, 'cetak_laporan'])->name('cetak.laporan');
        Route::get('/cetak-laporan-lolos', [PendaftaranController::class, 'cetak_lolos'])->name('cetak.lolos');
        Route::get('/cetak-laporan-tidak_lolos', [PendaftaranController::class, 'cetak_tidak_lolos'])->name('cetak.tidaklolos');
        Route::get('/cetak-laporan-pendaftar', [PendaftaranController::class, 'cetak_pendaftaran'])->name('cetak.pendaftar');
        Route::get('/data-users', [UserController::class, 'index'])->name('users.index');
        Route::delete('/data-users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    });
    Route::group(['middleware' => ['cek_login:siswa']], function () {
        Route::resource('pendaftaran', PendaftaranController::class);
        Route::get('/siswa', [PendaftaranController::class, 'view_dashboard'])->name('dashboard');
        Route::get('/pendaftaran/inputnilai/{id}', [PendaftaranController::class, 'view_input_nilai'])->name('input.nilai.siswa');
        Route::post('/pendaftaran/inputnilai/{id}', [PendaftaranController::class, 'input_nilai'])->name('input.nilai');
        Route::get('/cetak-kartu', [PendaftaranController::class, 'cetak_kartu'])->name('generate-pdf');
    });
});
