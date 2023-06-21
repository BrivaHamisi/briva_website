<?php

use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\HomeSliderController;


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

// Home Slide all Routes
Route::middleware('auth')->group(function () {
    Route::get('/home/slide', [HomeSliderController::class, 'HomeSlider'])->name('home.slide');
    Route::post('/update/slider', [HomeSliderController::class, 'UpdateSlider'])->name('update.slider');

});


// About Page all Routes
Route::middleware('auth')->group(function () {
    Route::get('/about/page', [AboutController::class, 'AboutPage'])->name('about.page');
    Route::post('/update/about', [AboutController::class, 'UpdateAbout'])->name('update.about');
    Route::get('/about', [AboutController::class, 'HomeAbout'])->name('home.about');

    //Multi Images
    Route::get('/about/multi_image', [AboutController::class, 'AboutMultiImage'])->name('about.multi.image');
    Route::post('/store/multi/image', [AboutController::class, 'StoreMultiImage'])->name('store.multi.image');
    Route::get('/all/multi_image', [AboutController::class, 'AllMultiImage'])->name('all.multi.image');
    Route::get('/edit/multi_image/{id}', [AboutController::class, 'EditMultiImage'])->name('edit.multi.image');
    Route::post('/update/multi_image', [AboutController::class, 'UpdateMultiImage'])->name('update.multi.image');

});

require __DIR__.'/auth.php';
