<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::get('posts', [PostController::class, 'index']);
Route::get('/post/create', [PostController::class, 'create'])->name('create');
Route::post('/post/store', [PostController::class, 'store'])->name('store');
Route::get('posts/{post}', [PostController::class, 'show'])->name('show');
Route::get('/posts/edit/{post}', [PostController::class, 'edit'])->name('edit');
Route::post('posts/update/{post}', [PostController::class, 'update'])->name('update');
Route::get('posts/delete/{post}', [PostController::class, 'destroy'])->name('destroy');


// Route::resource('posts', PostController::class)->only([
//     'destroy', 'show', 'store', 'update', 'index'
//  ]);