<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});



Route::get('/home',[AdminController::class,'index'])->name('home');
