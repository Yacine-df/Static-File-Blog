<?php

use App\Http\Controllers\PostsIndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', PostsIndexController::class);
