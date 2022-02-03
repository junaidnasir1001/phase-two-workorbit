<?php
use Illuminate\Support\Facades\Route;

Route::get('login',[\App\Http\Controllers\Auth\LoginController::class,'index'])->name('login');
Route::post('login',[\App\Http\Controllers\Auth\LoginController::class,'login'])->name('login');
Route::post('logout',[\App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');
Route::get('register',[\App\Http\Controllers\Auth\RegisterController::class,'index'])->name('register');
Route::post('register/save',[\App\Http\Controllers\Auth\RegisterController::class,'store'])->name('register.save');
