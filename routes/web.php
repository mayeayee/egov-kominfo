<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\publikContoller;
use App\Http\Controllers\WhatappsGateway;
use App\Http\Livewire\PM\Antrian;
use App\Http\Livewire\PM\Aplikasipm;
use App\Http\Livewire\PM\Maintenance;
use App\Http\Livewire\PM\Perbaikan;
use App\Http\Livewire\PM\ShowAplikasipm;
use App\Http\Livewire\Publik\Profile;
use App\Http\Livewire\SuperAdmin\Aplikasi;
use App\Http\Livewire\SuperAdmin\ODP;
use App\Http\Livewire\SuperAdmin\Pegawai;
use App\Http\Livewire\SuperAdmin\Pengaduan;
use App\Http\Livewire\SuperAdmin\ShowOPD;
use App\Http\Livewire\SuperAdmin\ShowPegawai;
use App\Http\Livewire\SuperAdmin\UserManagement;
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


// ========================== publik =========================
Route::get('/', [publikContoller::class, 'index'])->name('publik');
Route::get('/app', [publikContoller::class, 'app']);
Route::get('/app/{id}', [publikContoller::class, 'showapp'])->name('app-publik');
Route::get('/waiting-list', [publikContoller::class, 'waitinglist'])->name('waiting-list');
Route::get('/pemeliharaan', [publikContoller::class, 'pemeliharaan'])->name('pemeliharaan');
Route::any('/simpan-aduan', [publikContoller::class, 'aduan'])->name('simpan-aduan');
Route::get('/aduan', [HomeController::class, 'aduan'])->middleware('auth')->name('aduan');
// Route::post('/send-message', [WhatappsGateway::class, 'sendMessage'])->name('send-message');
Route::get('/app', [publikContoller::class, 'app']);


Route::get('/whatapps',[WhatappsGateway::class,'index'])->middleware('auth')->name('whatapps');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');
Route::get('/profil', Profile::class)->middleware('auth')->name('profil');
// ========================== Super Admin =========================

Route::middleware(['auth', 'checkRole:Super Admin'])->group(function () {
    Route::get('/user-management', UserManagement::class)->middleware('auth', 'checkRole:Super Admin')->name('userManagement');
    Route::get('/pegawai', Pegawai::class)->name('pegawai');
    Route::get('/pegawai/{slug}', ShowPegawai::class)->name('show-pegawai');
    Route::get('/opd', ODP::class)->name('opd');
    Route::get('/pengaduan', Pengaduan::class)->name('pengaduan');
    Route::get('/aplikasi', Aplikasi::class)->name('aplikasi');

    Route::get('/opd/{slug}', ShowOPD::class)->name('show-opd');
});


// ========================== Project Manager =========================

Route::middleware(['auth', 'checkRole:Project Manager'])->group(function () {

    Route::get('/antrian', Antrian::class)->name('antrian-pm');

    Route::get('/aplikasi-pm', Aplikasipm::class)->name('aplikasi-pm');

    Route::get('/aplikasi/{slug}', ShowAplikasipm::class)->name('show-aplikasi');
    Route::get('/maintenance', Maintenance::class)->name('maintenance');
    Route::get('/perbaikan', Perbaikan::class)->name('perbaikan');
});
