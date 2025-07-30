<?php

use Illuminate\Support\Facades\Route;

// Controller untuk Halaman Publik
use App\Http\Controllers\PageController;

// Controller Bawaan Breeze
use App\Http\Controllers\ProfileController;

// Controller untuk Panel Admin
use App\Http\Controllers\Admin\ClientController as AdminClientController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\FeatureController as AdminFeatureController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\RecruitmentController as AdminRecruitmentController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;
use App\Http\Controllers\Admin\ServiceDetailController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\AboutController as AdminAboutController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ===== RUTE HALAMAN PUBLIK =====
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/recruitment', [PageController::class, 'recruitment'])->name('recruitment');
Route::get('/news', [PageController::class, 'news'])->name('news.index');
Route::get('/news/{slug}', [PageController::class, 'newsDetail'])->name('news.show');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');


// ===== RUTE BAWAAN BREEZE (JANGAN DIUBAH) =====
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// ===== RUTE ADMIN PANEL =====
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    
    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    Route::resource('services', AdminServiceController::class);
    Route::resource('services.details', ServiceDetailController::class)->shallow();
    
    Route::resource('features', AdminFeatureController::class);
    Route::post('features/reorder', [AdminFeatureController::class, 'reorder'])->name('features.reorder');
    
    Route::resource('clients', AdminClientController::class);
    Route::resource('news', AdminNewsController::class);
    Route::resource('recruitments', AdminRecruitmentController::class);

    Route::get('about', [AdminAboutController::class, 'edit'])->name('about.edit');
    Route::post('about', [AdminAboutController::class, 'update'])->name('about.update'); 
       
    Route::get('settings', [SettingController::class, 'index'])->name('settings.index');
    Route::post('settings', [SettingController::class, 'update'])->name('settings.update');
    
    Route::resource('users', AdminUserController::class);
});


// ===== FILE OTENTIKASI DARI BREEZE (WAJIB ADA) =====
require __DIR__.'/auth.php';