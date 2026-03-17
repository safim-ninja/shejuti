<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');
Route::get('/blog/{id}', [HomeController::class, 'blog'])->name('blog.show');
Route::get('/experience', [HomeController::class, 'experience'])->name('experience');

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');

        Route::get('/profile', [AdminProfileController::class, 'edit'])->name('profile');
        Route::patch('/profile', [AdminProfileController::class, 'update'])->name('profile.update');

        Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
        Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
        Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
        Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
        Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('blogs.update');
        Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');

        Route::get('/experiences', [AdminController::class, 'experiences'])->name('experience');
        Route::get('/experiences/create', [AdminController::class, 'createExperience'])->name('experience.create');
        Route::post('/experiences', [AdminController::class, 'storeExperience'])->name('experience.store');
        Route::get('/experiences/{id}/edit', [AdminController::class, 'editExperience'])->name('experience.edit');
        Route::put('/experiences/{id}', [AdminController::class, 'updateExperience'])->name('experience.update');
        Route::delete('/experiences/{id}', [AdminController::class, 'destroyExperience'])->name('experience.destroy');


        Route::get('/projects', [AdminController::class, 'projects'])->name('projects');
        Route::get('/expertise', [AdminController::class, 'expertise'])->name('expertise');
        Route::get('/education', [AdminController::class, 'education'])->name('education');
        Route::get('/awards', [AdminController::class, 'awards'])->name('awards');
        Route::get('/contact', [AdminController::class, 'contact'])->name('contact');
        Route::get('/settings', [AdminController::class, 'settings'])->name('settings');
    });
});

require __DIR__ . '/auth.php';
