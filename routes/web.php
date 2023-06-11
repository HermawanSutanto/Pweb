<?php


use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardGudangController;
use App\Http\Controllers\DashboardBagController;

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DataPeminjamanController;
use App\Models\DataPeminjaman;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});
Route::get('/gudang', function () {
    return view('gudang', [
        "title" => "Gudang",
        "active" => "gudang",

    ]);
});
Route::get('/posts', [PostController::class, 'index']);
// halaman single post
Route::get('post/{post:slug}',  [PostController::class, 'show']);
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('categories',  function () {
    return view('categories', [
        'title' => 'Post Categories',
        "active" => "categories",
        'categories' => Category::all()
    ]);
});
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register   ', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register   ', [RegisterController::class, 'store']);
Route::get('/dashboard   ', function () {
    return view('dashboard.index', [
        'title' => 'Dashboard',
        'active' => 'Home'
    ]);
})->middleware('auth');
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::get('/dashboard/categories', [AdminCategoryController::class, 'index']);
Route::get('/dashboard/gudangs', [DashboardGudangController::class, 'index']);
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show');
Route::resource('/dashboard/gudangs', DashboardGudangController::class);
Route::get('/dashboard/bags', [DashboardBagController::class, 'index']);
Route::get('/dashboard/dataPeminjaman', [DataPeminjamanController::class, 'index']);

Route::resource('/dashboard/bags', DashboardBagController::class);
