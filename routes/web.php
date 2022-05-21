<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{PostController, CategoryController};
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts', [PostController::class, 'index'])->name('posts');
Route::get('/post/create', [PostController::class, 'create'])->name('create');
Route::post('/post/store', [PostController::class, 'store'])->name('store');
Route::get('posts/{post}', [PostController::class, 'show'])->name('show');
Route::get('/posts/edit/{post}', [PostController::class, 'edit'])->name('edit');
Route::post('posts/update/{post}', [PostController::class, 'update'])->name('update');
Route::get('posts/delete/{post}', [PostController::class, 'destroy'])->name('destroy');

Route::get('categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/category/create', [CategoryController::class, 'create'])->name('createCategory');
Route::get('/category/{category}', [CategoryController::class, 'createPost'])->name('createPost');
Route::post('/category/store', [CategoryController::class, 'store'])->name('storeCategory');
Route::get('categories/{category}', [CategoryController::class, 'show'])->name('showCategory');
Route::get('categories/edit/{category}', [CategoryController::class, 'edit'])->name('editCategory');
Route::post('categories/update/{category}', [CategoryController::class, 'update'])->name('updateCategory');
Route::get('categories/delete/{category}', [CategoryController::class, 'destroy'])->name('destroyCategory');


// Route::resource('posts', PostController::class)->only([
//     'destroy', 'show', 'store', 'update', 'index'
//  ]);