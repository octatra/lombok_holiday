<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\backend\CompanyController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\KategoriPaketController;
use App\Http\Controllers\backend\PaketwisataController;
use App\Http\Controllers\frontend\LandingPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'home'])->name('home');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/admin/kategori-paket', [KategoriPaketController::class, 'index'])->name('admin.kategori-paket');
    Route::get('/admin/kategori-paket/create', [KategoriPaketController::class, 'create'])->name('admin.kategori-paket.create');
    Route::post('/admin/kategori-paket/store', [KategoriPaketController::class, 'store'])->name('admin.kategori-paket.store');
    Route::get('/admin/kategori-paket/edit/{id}', [KategoriPaketController::class, 'edit'])->name('admin.kategori-paket.edit');
    Route::put('/admin/kategori-paket/update/{id}', [KategoriPaketController::class, 'update'])->name('admin.kategori-paket.update');
    Route::get('/admin/kategori-paket/detail/{id}', [KategoriPaketController::class, 'detail'])->name('admin.kategori-paket.detail');
    Route::get('/admin/kategori-paket/delet/{id}', [KategoriPaketController::class, 'delet'])->name('admin.kategori-paket.delet');

    Route::get('/admin/paket-wisata', [PaketwisataController::class, 'index'])->name('admin.paket-wisata');
    Route::get('/admin/paket-wisata/create', [PaketwisataController::class, 'create'])->name('admin.paket-wisata.create');
    Route::post('/admin/paket-wisata/store', [PaketwisataController::class, 'store'])->name('admin.paket-wisata.store');
    Route::get('/admin/paket-wisata/edit/{id}', [PaketwisataController::class, 'edit'])->name('admin.paket-wisata.edit');
    Route::put('/admin/paket-wisata/update/{id}', [PaketwisataController::class, 'update'])->name('admin.paket-wisata.update');
    Route::get('/admin/paket-wisata/delet/{id}', [PaketwisataController::class, 'delet'])->name('admin.paket-wisata.delet');

    Route::get('/admin/company', [CompanyController::class, 'index'])->name('admin.company');
    Route::put('/admin/company/update/{id}', [CompanyController::class, 'update'])->name('admin.company.update');
});

Route::get('/home', [LandingPageController::class, 'home'])->name('home');
Route::get('/tentang-kami', [LandingPageController::class, 'about'])->name('about');
Route::get('/destinasi', [LandingPageController::class, 'destinasi'])->name('destinasi');
Route::get('/hotel', [LandingPageController::class, 'hotel'])->name('hotel');
Route::get('/contact', [LandingPageController::class, 'contact'])->name('contact');
Route::get('/tes', [LandingPageController::class, 'tes'])->name('tes');
Route::get('/{slug}', [LandingPageController::class, 'detail_destinasi'])->name('detail_destinasi');
