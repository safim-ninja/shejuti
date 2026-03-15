<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin');
    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('/admin/experience', [AdminController::class, 'experience'])->name('admin.experience');
    Route::get('/admin/projects', [AdminController::class, 'projects'])->name('admin.projects');
    Route::get('/admin/expertise', [AdminController::class, 'expertise'])->name('admin.expertise');
    Route::get('/admin/education', [AdminController::class, 'education'])->name('admin.education');
    Route::get('/admin/awards', [AdminController::class, 'awards'])->name('admin.awards');
    Route::get('/admin/contact', [AdminController::class, 'contact'])->name('admin.contact');
    Route::get('/admin/settings', [AdminController::class, 'settings'])->name('admin.settings');
});

require __DIR__.'/auth.php';
