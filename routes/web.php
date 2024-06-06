<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\LoginController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

//Admin

Route::group(['middleware' => 'admin.middleware'], function () {

    Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/admin/about_me', [DashboardController::class, 'about_me'])->name('admin.aboutme');

    Route::post('/admin/about_me/store', [DashboardController::class, 'about_me_store'])->name('admin.aboutme.store');

    Route::get('/admin/skillSet', [DashboardController::class, 'skillSet'])->name('admin.skillSet');

    Route::get('/admin/portfolio', [DashboardController::class, 'portfolio'])->name('admin.portfolio');

    Route::get('/admin/contact', [DashboardController::class, 'contact'])->name('admin.contact');

    Route::get('/admin/blog', [DashboardController::class, 'blog'])->name('admin.blog');

});


Route::get('/login', [LoginController::class, 'login_page'])->name('login');

Route::post('/login_auth', [LoginController::class, 'login_auth'])->name('login.auth');

Route::get('/forgot_pass', [LoginController::class, 'forgot_Pass'])->name('forgot.pass');

Route::post('/forgot_admin',[LoginController::class,'forgot_admin'])->name('forgot.admin');

Route::get('admin/logout', [LoginController::class, 'logout'])->name('admin.logout');

