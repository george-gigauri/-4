<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

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
})->name('none');

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('/post_login', [\App\Http\Controllers\LoginController::class, 'postLogin'])->name('post.login');
Route::post('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
Route::get("/register", [\App\http\Controllers\LoginController::class, 'register'] )->name('register');
Route::post('/save_user', [\App\Http\Controllers\LoginController::class, 'save_user'])->name('user.save');
Route::get('/my_posts', [\App\Http\Controllers\LoginController::class, 'index']);
//Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index']);
//Route::get('/posts/create', [\App\Http\Controllers\PostController::class, 'create'])->name('posts.create');
//Route::get('/posts/{id}', [\App\Http\Controllers\PostController::class, 'show']);
//Route::post('/posts/save_post', [\App\Http\Controllers\PostController::class, 'save'])->name('posts.save');
//Route::get("/posts/{id}/edit", [\App\http\Controllers\PostController::class, 'edit'] )->name('posts.edit');
//Route::put('/posts/{id}/update', [\App\http\Controllers\PostController::class, 'update'])->name('posts.update');
//Route::delete('/posts/{id}/delete', [\App\Http\Controllers\PostController::class, 'delete'])->name('posts.delete');




Route::middleware('auth')->group(function(){
    Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index'])->name('posts');
    Route::get('/posts/create', [\App\Http\Controllers\PostController::class, 'create'])->name('posts.create');
    Route::get('/posts/{id}', [\App\Http\Controllers\PostController::class, 'show']);
    Route::post('/posts/save_post', [\App\Http\Controllers\PostController::class, 'save'])->name('posts.save');
    Route::get("/posts/{id}/edit", [\App\http\Controllers\PostController::class, 'edit'] )->name('posts.edit');
    Route::post('/posts/{id}/update', [\App\http\Controllers\PostController::class, 'update'])->name('posts.update');
    Route::get('/posts/{id}/delete', [\App\Http\Controllers\PostController::class, 'delete'])->name('posts.delete');
});
Route::post('posts/{id}/approve', [\App\Http\Controllers\PostController::class, 'approve'])->name('approve');

Route::get('/email/create', [\App\Http\Controllers\MailController::class, 'create'])->name('mail.create');

Route::post('/email/send', [\App\Http\Controllers\MailController::class, 'send'])->name('mail.send');
