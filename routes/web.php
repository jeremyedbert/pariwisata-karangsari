<?php

use App\Http\Controllers\admin\DashboardAdminController;
use App\Http\Controllers\admin\DashboardBlogController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\DashboardGalleryController;
use App\Http\Controllers\admin\DashboardTourController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/contact', [ContactController::class])->name('contact');
Route::prefix('/admin')->name('admin.')->group(function () {
	Route::resource('/dashboard', DashboardController::class)->name('index', 'dashboard');
	Route::resource('/blog', DashboardBlogController::class)->name('index', 'blog');
	Route::resource('/gallery', DashboardGalleryController::class)->name('index', 'gallery');
	Route::resource('/tour', DashboardTourController::class)->name('index', 'tour');
	Route::resource('/setting', DashboardAdminController::class)->name('index', 'setting');
});