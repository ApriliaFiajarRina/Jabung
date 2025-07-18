<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

// Index Routes
Route::get('/', [IndexController::class, 'showIndexPage'])->name("index");

// About Routes
Route::get('/about', [AboutController::class, 'showAboutPage'])->name("about");
Route::get('/about/selengkapnya', [AboutController::class, 'showSelengkapnyaPage'])->name("selengkapnya");

// Document Route
Route::prefix('/surat-menyurat')->group(function () {
    Route::get('/', [DocumentController::class, 'showSuratMenyurat'])->name("surat.menyurat");
    Route::get('/skk', [DocumentController::class, 'showSuratKehilangan'])->name("surat.menyurat.skk");
    Route::get('/sku', [DocumentController::class, 'showSuratUsaha'])->name("surat.menyurat.sku");
    Route::get('/skd', [DocumentController::class, 'showSuratDomisili'])->name("surat.menyurat.skd");
    Route::get('/sps', [DocumentController::class, 'showSuratSolar'])->name("surat.menyurat.sps");
    Route::post('/send', [DocumentController::class, 'sendSurat'])->name('surat.menyurat.send');
});
Route::get('/download-pdf/{nik}/{typeDoc?}',  [DocumentController::class, 'downloadPDF'])->name('download.surat.pdf');

// Budget Route
Route::get('/anggaran/{year}', [BudgetController::class, 'viewAnggaranYearly'])->name("anggaran.show");
Route::get('/anggaran', [BudgetController::class, 'redirectToAnggaran'])->name("anggaran");

// Galery Route
Route::get('/galery', [GaleryController::class, 'showGaleryPage'])->name("galery");

// Berita Route
Route::get('/berita', [NewsController::class, 'redirectToNews'])->name("berita");
Route::get('/berita/{id}', [NewsController::class, 'show'])->name("berita.show");

// Pengaduan route
Route::get('/pengaduan', [ContactController::class, 'showPengaduan'])->name('pengaduan');
Route::post('/pengaduan/kirim', [ContactController::class, 'sendWelcomeEmail'])->name('pengaduan.send');
