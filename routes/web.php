<?php

use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });


// Route::get('/dashboard', function () {
//     // return view('dashboard');
//     echo 'hello';
// })->middleware(['auth'])->name('dashboard');


// -------------------------------------------------------------
                   // Custom Routes
// -------------------------------------------------------------
Route::get('/',[ HomeController::class, 'home']);
Route::get('/contact-us',[ HomeController::class, 'cotactUs'])->name('home.contact_us');
Route::get('/teachers',[ HomeController::class, 'teacher'])->name('home.teacher');