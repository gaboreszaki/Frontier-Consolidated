<?php

use App\Http\Controllers\Admin\AfterEventReportController;
use App\Http\Controllers\Admin\NewsController;
use Illuminate\Support\Facades\Route;


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
Route::view('/', 'main');
Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified'])->group(function () {
    Route::view('/', 'admin')->name('admin');
    Route::resource('/news', NewsController::class);
    Route::resource('/reports', AfterEventReportController::class);
});

Auth::routes(['register' => false]);

//Route::view('dashboard', 'dashboard')
//    ->middleware(['auth', 'verified'])
//    ->name('dashboard');
//
//Route::view('profile', 'profile')
//    ->middleware(['auth'])
//    ->name('profile');
//
//require __DIR__.'/auth.php';
//

//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
