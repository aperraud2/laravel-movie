<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/awards', [App\Http\Controllers\AwardController::class, "index"]);

Route::get('/genres', [App\Http\Controllers\GenreController::class, "index"]);

Route::get('/top-rated-movies', [App\Http\Controllers\MovieController::class, "topRated"]);

Route::get('/top-rated-games', [App\Http\Controllers\GameController::class, "gaga"]);