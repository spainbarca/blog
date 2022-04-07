<?php


use App\Models\Post;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\PhotosController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\CategoriesController;

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
App::setlocale("es");

// Example Routes
Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('blog/{post}', [BlogsController::class, 'show'])->name('blog');
Route::get('categorias/{category}', [CategoriesController::class, 'show'])->name('categories.show');

Route::group(['prefix' => 'admin', 'middleware'=> 'auth'], function(){
    Route::get('posts', [PostsController::class, 'index'])->name('admin.posts.index');
    Route::get('posts/create', [PostsController::class, 'create'])->name('admin.posts.create');
    Route::post('posts', [PostsController::class, 'store'])->name('admin.posts.store');
    Route::get('posts/{post}', [PostsController::class, 'edit'])->name('admin.posts.edit');
    Route::put('posts/{post}', [PostsController::class, 'update'])->name('admin.posts.update');

    Route::post('posts/{post}/photos', [PhotosController::class, 'store'])->name('admin.posts.photos.store');
    Route::delete('posts/{photo}', [PhotosController::class, 'destroy'])->name('admin.photos.destroy');
});

Route::match(['get', 'post'], '/admin', function(){
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::view('/pages/slick', 'pages.slick');
Route::view('/pages/datatables', 'pages.datatables');
Route::view('/pages/blank', 'pages.blank');

Route::get('posts', function(){
    return Post::all();
});

Auth::routes();
