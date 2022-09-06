<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';
Route::middleware(['auth'])->group(function () {
    Route::resource('/admin-panel', DashboardController::class);
    Route::resource('/users', UserController::class);
    Route::get('change_status/{user}', [UserController::class, 'changeStatus'])->name('user.change_status');
    Route::post('change_role/{user}', [UserController::class, 'changeRole'])->name('user.change_role');
    Route::get('profile', [UserController::class, 'profile'])->name('user.profile');
    Route::get('profile-update/{user}', [UserController::class, 'updateProfile'])->name('user.update-profile');
    Route::post('profile-update/{user}', [UserController::class, 'updateProfileDetails'])->name('user.update-profile_details');
    Route::post('change_password/{user}', [UserController::class, 'changePassword'])->name('user.change_password');
});