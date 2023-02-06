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
use App\Http\Controllers\LoginController;
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
// Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::prefix('/admin')->name('admin.')->group(function () {
	// Not Authenticated
	Route::middleware(['guest:admin', 'preventbackhistory'])->group(
		function () {
			Route::get('/login', [LoginController::class, 'index'])->name('login');
			Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
		}
	);

	// Admin
	Route::middleware(['auth:admin', 'preventbackhistory'])->group(
		function () {
			Route::resource('/setting', DashboardAdminController::class, ['parameters' => ['setting' => 'admin']])->names([
				'index' => 'setting',
				'edit' => 'setting.edit',
				'create' => 'setting.create'
			]);
			Route::resource('/dashboard', DashboardController::class)->name('index', 'dashboard');
			Route::resource('/gallery', DashboardGalleryController::class)->names([
				'index' => 'gallery',
				'edit' => 'gallery.edit',
				'create' => 'gallery.create',
			]);
			Route::resource('/tour', DashboardTourController::class, [
				'names' => [
					'index' => 'tour',
					'edit' => 'tour.edit',
				]
			]);
			// Route::post('/gallery/upload', [DashboardGalleryController::class, 'upload'])->name('gallery.upload');
			Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
		}
	);
});