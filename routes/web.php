<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogsController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/pengumuman-detail/{id}', [HomeController::class, 'pengumumanDetail'])->name('pengumuman.detail');