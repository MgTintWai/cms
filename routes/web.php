<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController as ControllersHomeController;
use App\Http\Controllers\PostController as ControllersPostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'auth'],function(){

//     Route::get('home', [HomeController::class, 'index'])->name('home');
//     Route::get('category', [CategoryController::class,'index']);
//     Route::get('category/create', [CategoryController::class,'create']);
//     Route::post('category/store', [CategoryController::class,'store']);

// });

Route::get('/',[ControllersHomeController::class,'index'])->middleware('auth');
Route::get('/post/{slug}',[ControllersPostController::class,'index'])->middleware('auth')->name('post.detail');
Route::get('/post/tag/{slug}',[ControllersPostController::class,'postByTag'])->middleware('auth')->name('post.tag');
Route::get('/post/category/{slug}',[ControllersPostController::class,'postByCategory'])->middleware('auth')->name('post.category');

// Route::get('/welcome',function(){
//     return view('welcome');
// });

// For Admin Route

Route::resource('admin/category',CategoryController::class)->middleware('auth');
Route::resource('admin/posts',PostController::class)->middleware('auth');
Route::resource('admin/tags',TagController::class)->middleware('auth');

Route::get('admin/user/{user}',[UserController::class,'edit'])->middleware('auth');
Route::post('admin/user/{user}',[UserController::class,'update'])->middleware('auth');
Route::get('admin/user',[UserController::class,'index'])->middleware('auth');
Route::get('admin/user/create/add',[UserController::class,'create'])->name('user.add')->middleware('auth');
Route::post('admin/user/add/new',[UserController::class,'store'])->name('user.addnew')->middleware('auth');
Route::get('admin/user/role/edit/{role}/{user_id}',[UserController::class,'editRole'])->name('user.edit.role')->middleware('Admin');

Route::get('admin/home', [HomeController::class, 'index'])->middleware('auth')->name('welcome');

Auth::routes();






