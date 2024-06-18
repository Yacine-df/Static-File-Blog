<?php

use App\Http\Controllers\PostShowController;
use App\Http\Controllers\PostsIndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', PostsIndexController::class);
Route::get('/{post}', PostShowController::class);
