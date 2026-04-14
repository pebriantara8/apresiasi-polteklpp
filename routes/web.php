<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\Issue\IssueController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //WORSHIP
    // Route::resource('/admin/worship', \App\Http\Controllers\Admin\Worship\WorshipController::class)->names('admin.worship');
});

// Route::get('admin', function () {
//     return "hellow";
// })->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::resource('/admin/dashboard', \App\Http\Controllers\Admin\Dashboard\DashboardController::class)->names('admin.dashboard');

    Route::resource('/admin/issue', \App\Http\Controllers\Admin\Issue\IssueController::class)->names('admin.issue');
    Route::get('/admin/issue/detail/{id}', [IssueController::class, 'detail'])->name('admin.issue.detail');
});
require __DIR__ . '/auth.php';
