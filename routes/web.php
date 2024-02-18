<?php

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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('/admin')->middleware(['auth','isAdmin'])->group(function (){
    Route::get('/',[\App\Http\Controllers\Admin\DashboardController::class,'index'])->name('admin.dashboard');
    Route::resource('quiz',\App\Http\Controllers\Admin\QuizController::class);
});
