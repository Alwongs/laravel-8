<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\VizitController;

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



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/post/{id}', [BlogController::class, 'show'])->name('post');

Route::middleware('auth')->group(function () {

    Route::get('/vizits', [VizitController::class, 'index'])->name('vizits');
    Route::get('/clear-vizits', [VizitController::class, 'clear'])->name('clear-vizits');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/events/postpone/{id}', [DashboardController::class, 'postpone'])->name('events.postpone');

    Route::resources([
        'events' => EventController::class,
        'posts' => PostController::class, 
    ]);
});



require __DIR__.'/auth.php';
