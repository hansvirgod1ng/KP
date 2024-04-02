<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardBlogController;
use App\Http\Controllers\DashboardProgramController;

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

// COMPANY PROFILE ROUTES
Route::get('/', [CompanyController::class, 'index'])->name('home');
Route::get('/about', [CompanyController::class, 'about'])->name('about');
Route::get('/programs', [CompanyController::class, 'program'])->name('programs');
Route::get('/programs/{category:slug}', [CompanyController::class, 'programByCategory']);

// BLOG 
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blogs/{blog:slug}', [BlogController::class, 'show']);


// ADMIN DASHBOARD ROUTES
Route::get('/hd-admin', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/hd-admin', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class , 'index'])->middleware('auth');

Route::get('/dashboard/programs/createSlug', [DashboardProgramController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/programs', DashboardProgramController::class)->middleware('auth');

Route::get('/dashboard/blogs/createSlug', [DashboardBlogController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/blogs', DashboardBlogController::class)->middleware('auth');


// Route::get('/hd-admin/blogs', function(){
//     return view('admin.blog',[
//         "title" => "Blogs Dashboard - Hongde College",
//         "page" => "blogs"
//     ]);
// });
