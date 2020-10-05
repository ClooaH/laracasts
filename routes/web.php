<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ArticlesController;

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
    $name = request('name');
    
    return view('test', [
        'name' => $name
    ]);
});

Route::get('/posts/{post}', [PostsController::class,'show']);

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/simple', function () {
    return view('simple');
});

Route::get('/about', function () {
    return view('about', [
        'articles' => App\Models\Article::take(3)->latest()->get()
    ]);
});

Route::get('/articles', [ArticlesController::class, 'index']);

Route::post('/articles', [ArticlesController::class, 'store']);

Route::get('/articles/create', [ArticlesController::class, 'create']);

Route::get('/articles/{article}', [ArticlesController::class, 'show'])->name('articles.show');

Route::get('/articles/{article}/edit', [ArticlesController::class, 'edit']);

Route::put('/articles/{article}', [ArticlesController::class, 'update']);