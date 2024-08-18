<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController as AdminPostController;


Route::get('/', function () {
    return view('auth/login');
});

Route::group(['middleware' => ['auth']], function(){
    Route::resource('posts', PostController::class);
    Route::resource('photos', PhotoController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
});



Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    
    Route::resource('/users', UserController::class);

    Route::resource('/posts', AdminPostController::class, [
        'as' => 'admin'  // This will name the routes as admin.posts.*
    ]);

});


Auth::routes();

