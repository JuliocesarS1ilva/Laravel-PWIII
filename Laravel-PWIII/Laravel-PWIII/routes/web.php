<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::get('/', fn()=>view('welcome'));
Route::get('/usuarios',[UserController::class,'index'])->name('users.index');
Route::get('/cadastro',[UserController::class,'create'])->name('users.create');
Route::post('/cadastro',[UserController::class,'store'])->name('users.store');
