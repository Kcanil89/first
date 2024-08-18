<?php

use Illuminate\Http\Request;
use App\Model\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\AuthController;

Route::post('/login',  [AuthController::class, 'login']);
Route::get('/user',  [UserController::class, 'index']);
