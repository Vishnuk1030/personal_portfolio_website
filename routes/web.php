<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\PortfolioController;
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

//personal website
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/pdf', [HomeController::class, 'pdf'])->name('pdf');

Route::post('/contact/post',[HomeController::class,'Contact_post'])->name('contact.post');
//Admin

Route::group(['middleware' => 'admin.middleware'], function () {

    Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/admin/Home', [DashboardController::class, 'Home'])->name('admin.Home');

    Route::post('/admin/Home/store', [DashboardController::class, 'Home_store'])->name('admin.Home.store');

    Route::get('/admin/About_me', [DashboardController::class, 'About_me'])->name('admin.About_me');

    Route::post('/admin/About_me/store', [DashboardController::class, 'About_me_store'])->name('admin.About_me.store');

    Route::get('/admin/skillSet', [DashboardController::class, 'skillSet'])->name('admin.skillSet');

    Route::post('/admin/skillSet/store', [DashboardController::class, 'skillSet_store'])->name('admin.skillSet.store');

    Route::get('/admin/portfolio', [DashboardController::class, 'portfolio'])->name('admin.portfolio');

    Route::get('/admin/portfolio/Add', [PortfolioController::class, 'portfolio_add'])->name('admin.portfolio.add');

    Route::post('/admin/portfolio/Add', [PortfolioController::class, 'portfolio_store'])->name('admin.portfolio.store');

    Route::get('/admin/portfolio/edit/{id}', [PortfolioController::class, 'portfolio_edit'])->name('admin.portfolio.edit');

    Route::put('/admin/portfolio/update/{id}', [PortfolioController::class, 'portfolio_update'])->name('admin.portfolio.update');

    Route::get('/admin/portfolio/delete/{id}', [PortfolioController::class, 'portfolio_delete'])->name('admin.portfolio.delete');

    Route::get('/admin/contact', [DashboardController::class, 'contact'])->name('admin.contact');

    Route::get('/admin/contact/delete/{id}', [DashboardController::class, 'contact_delete'])->name('admin.contact.delete');

    Route::get('/admin/blog', [DashboardController::class, 'blog'])->name('admin.blog');
});


Route::get('/login', [LoginController::class, 'login_page'])->name('login');

Route::post('/login_auth', [LoginController::class, 'login_auth'])->name('login.auth');

Route::get('/forgot_pass', [LoginController::class, 'forgot_Pass'])->name('forgot.pass');

Route::post('/forgot_admin', [LoginController::class, 'forgot_admin'])->name('forgot.admin');

Route::get('admin/logout', [LoginController::class, 'logout'])->name('admin.logout');
