<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestHomeController;
use App\Http\Controllers\AdminHomeController;

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
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', GuestHomeController::class)->name('guest.home');

Route::get('/admin', [AdminHomeController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.home');
Route::get('/admin/projects', [AdminHomeController::class, 'projectsIndex'])->middleware(['auth', 'verified'])->name('admin.projects.index');


require __DIR__ . '/auth.php';

