<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{PortalController, InquiryController};

Route::get('/', [PortalController::class, 'page'])->name('home');
foreach (['tentang' => 'about', 'sekolah' => 'schools', 'akademik' => 'academic', 'berita' => 'news', 'prestasi' => 'achievements', 'fasilitas' => 'facilities', 'galeri' => 'gallery', 'ppdb' => 'admissions', 'kontak' => 'contact'] as $path => $key) Route::get('/' . $path, [PortalController::class, 'page'])->defaults('key', $key)->name($key);
foreach (['sd', 'smp', 'sma'] as $level) Route::get('/sekolah/' . $level, [PortalController::class, 'page'])->defaults('key', $level)->name('school.' . $level);
Route::get('/tentang/{section}', [PortalController::class, 'about']);
Route::get('/ppdb/{school}', [PortalController::class, 'admission'])->whereIn('school', ['sd', 'smp', 'sma']);
Route::get('/cari', [PortalController::class, 'search'])->name('search');
Route::get('/sitemap.xml', [PortalController::class, 'sitemap'])->name('sitemap');
Route::get('/robots.txt', fn() => response("User-agent: *\nDisallow: /admin\nSitemap: " . url('/sitemap.xml') . "\n")->header('Content-Type', 'text/plain'));
Route::post('/kontak', [InquiryController::class, 'store'])->middleware('throttle:5,1')->name('inquiries.store');
Route::post('/newsletter', [InquiryController::class, 'subscribe'])->middleware('throttle:3,1')->name('newsletter.store');
Route::get('/{kind}/{slug}', [PortalController::class, 'detail'])->whereIn('kind', ['berita', 'prestasi', 'program', 'fasilitas', 'galeri', 'ekstrakurikuler']);
