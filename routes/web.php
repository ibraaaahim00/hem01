<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\ArticleController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UsersController;

Route::group(['prefix' => 'admin'], function () {
   Route::get('/login',[DashboardController::class,'login'])->name('login');
   Route::post('/login',[DashboardController::class,'auth'])->name('admin.login.auth');
Route::post('/logout',[DashboardController::class,'logout'])->name('admin.logout')->middleware('auth');
});
Route::get('/', function () {
    return redirect()->route('client.articles');
});

Route::group(['prefix'=>'admin',
    'middleware'=>['auth']
], function () {
Route::get('/',[DashboardController::class,'home'])->name('admin.home');

Route::get('/articles',[ArticleController::class,'index'])->name('admin.articles');
Route::get('/articles/create',[ArticleController::class,'create'])->name('admin.articles.create');

Route::post('/articles',[ArticleController::class,'store'])->name('admin.articles.store');
Route::get('/articles/{article}/edit',[ArticleController::class,'edit'])->name('admin.articles.edit');

Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->name('admin.articles.destroy');
Route::put('/articles/{article}',[ArticleController::class,'update'])->name('admin.articles.update');

Route::get('/users',[UsersController::class,'users'])->name('admin.users');
});

Route::get('/articles',[ArticleController::class,'clientindex'])->name('client.articles');
Route::get('/articles/{articles}',[ArticleController::class,'show'])->name('client.articles.show');
Route::post('/articles/{articles}/comment',[ArticleController::class,'addcomment'])->name('articles.comment');
