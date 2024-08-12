<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
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

Route::get('/', [PostController::class, 'index']);


Route::get('/about', function () {
    return view('about', [
        "name" => "Mahadi Dwi Nugraha",
        "email" => "mahadidwinugraha@gmail.com",
        "active" => "about",
        "image" => "profil.jpg",
        "title" => "about"
    ]);
});


Route::get('/puisi', [PostController::class, 'index']);


// halama single post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        "title" => "Categories",

        "active" => "categories",
        "categories" => Category::all(),
    ]);
});

// login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');


// dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::middleware('auth')->group(function(){

    Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug']);
    
    Route::resource('/dashboard/posts', DashboardPostController::class);
    
    Route::get('/dashboard/categories/{category:uuid}/edit', [AdminCategoryController::class, 'edit']);
    Route::put('/dashboard/categories/{category:uuid}', [AdminCategoryController::class, 'update']);
    Route::delete('/dashboard/categories/{category:uuid}', [AdminCategoryController::class, 'destroy']);

    Route::resource('/dashboard/categories', AdminCategoryController::class);
});

