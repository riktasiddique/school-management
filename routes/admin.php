<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::resource('/admin-panel', DashboardController::class);
require __DIR__.'/auth.php';
