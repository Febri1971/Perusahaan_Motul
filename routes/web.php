<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Route halaman utama
Route::view('/', 'home')->name('home');

// Route profil
Route::view('/profile', 'profile')->name('profile');

// Route layanan
Route::view('/services', 'services')->name('services');

// Route galeri
Route::view('/gallery', 'gallery')->name('gallery');

// Route kontak GET untuk menampilkan form
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Route kontak POST untuk menyimpan data ke database
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');