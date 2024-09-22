<?php

use App\Http\Controllers\API\PostController;
use Illuminate\Support\Facades\Route;

// Public API routes for blog posts
Route::get('/api/posts', [PostController::class, 'index']);
Route::get('/api/posts/{id}', [PostController::class, 'show']);