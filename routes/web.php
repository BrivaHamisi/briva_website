<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('frontend.index');

});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('/edit/profile', [AdminController::class, 'editProfile'])->name('edit.profile');
    Route::post('/store/profile', [AdminController::class, 'storeProfile'])->name('store.profile');
    Route::post('/update/password', [AdminController::class, 'updatePassword'])->name('update.password');
    Route::get('/change/password', [AdminController::class, 'changePassword'])->name('change.password');
});

require __DIR__.'/auth.php';
