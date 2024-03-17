<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


Route::get('/',[MainController::class,'index']);
Route::get('/register',[MainController::class,'register']);
Route::post('/register',[MainController::class,'insert']);
Route::post('/advocate_register',[MainController::class,'advocate_register']);
Route::get('/advocate_register',[MainController::class,'advocate_register_form']);
Route::post('/login',[MainController::class,'customer_login']);
Route::get('/login',[MainController::class,'login']);
Route::get('/advocate_login',[MainController::class,'advocate_login_form']);
Route::post('/advocate_login',[MainController::class,'advocate_login']);