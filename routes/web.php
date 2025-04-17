<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.login');
});


Route::get('/categories', [CategorieController::class, 'index']);
Route::get('/categories/ajouter', [CategorieController::class, 'store']);




Route::post("/register",[AuthController::class, "register"]);
Route::post("/login",[AuthController::class, "login"]);