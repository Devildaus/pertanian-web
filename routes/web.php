<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use Laravel\Sanctum\Http\Middleware\CheckAbilities;
use App\Http\Controllers\ContactController;

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
Route::post('/contact/store', [ContactController::class, 'store'])->name('contacts.store');
Route::get('/dashboard/pesan', [ContactController::class, 'index'])->name('contacts.index');
Route::delete('/dashboard/contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => 'home',
        "blogs" => Post::latest()->paginate(3)->withQueryString(),
    ]);
});

// Route::get('/login', function () {
//     return view('login');
// });



Route::get('/about', function () {
    return view('about', [
        "title" => "About",
    ]);
});
Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact",
    ]);
});


Route::get('/posts', [PostController::class, 'index']);



//Halaman Single post

Route::get('/posts/{post:slug}', [PostController::class, 'show']);


//category binding
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');


Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
