<?php


use App\Models\Post;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Admin\PostsController;

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

Route::group(['prefix' => 'admin', 'middleware'=> 'auth'], function(){
    Route::get('posts', [PostsController::class, 'index'])->name('admin.posts.index');
    Route::get('posts/create', [PostsController::class, 'create'])->name('admin.posts.create');
    Route::post('posts', [PostsController::class, 'store'])->name('admin.posts.store');
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
