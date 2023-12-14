<?php

use App\Http\Controllers\Controller;
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
Route::get('/', [Controller::class, 'home'])->name('home');
Route::get('/Riset', [Controller::class, 'riset'])->name('riset');
Route::get('/Riset/See All', [Controller::class, 'seeallriset'])->name('seeall.riset');
Route::get('/Riset/Baca', [Controller::class, 'baca'])->name('riset.baca');
Route::get('/Tentang Kami', [Controller::class, 'tentangkami'])->name('tentangkami');
Route::get('/Tentang Kami/Siapa Kita', [Controller::class, 'siapakita'])->name('tentangkami.siapakita');
Route::get('/Tentang Kami/Tata kelola', [Controller::class, 'tatakelola'])->name('tentangkami.tatakelola');
route::get('/Hubungi Kami', [Controller::class,'hubungikami'])->name('hubungikami');
route::get('/Pusat Bantuan', [Controller::class,'pusatbantuan'])->name('pusatbantuan');
route::get('/Pusat Bantuan/Menu Bantuan', [Controller::class,'menubantuan'])->name('menubantuan');
route::get('/Pusat Bantuan/Baca Bantuan', [Controller::class,'bacabantuan'])->name('bacabantuan');
route::get('/Portofolio IPO', [Controller::class,'portofolioipo'])->name('portofolioipo');
route::get('/Karir', [Controller::class,'karir'])->name('karir');
route::get('/Karir/Baca Karir', [Controller::class,'bacakarir'])->name('bacakarir');
route::get('/peraturan', [Controller::class,'peraturan'])->name('peraturan');
route::get('/peraturan/Baca Peraturan', [Controller::class,'bacaperaturan'])->name('bacaperaturan');
route::get('/Disclaimer', [Controller::class,'disclaimer'])->name('disclaimer');
route::get('/Pengaduhan Nasabah', [Controller::class,'pengaduannasabah'])->name('pengaduannasabah');
route::get('/Pembukaan Rekening', [Controller::class,'pembukaanrekening'])->name('pembukaanrekening');
route::get('/Pembukaan Rekening/Rekening Individu', [Controller::class,'rekeningindividu'])->name('pembukaanindividu');
route::get('/Pembukaan Rekening/Rekening Institusi', [Controller::class,'rekeninginstitusi'])->name('pembukaaninstitusi');
route::get('/Pembukaan Rekening/Rekening Marjin', [Controller::class,'rekeningmarjin'])->name('pembukaanmarjin');