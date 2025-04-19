<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.register');
});
Route::get("/seConnect",[AuthController::class, "index"]);
Route::get("/inscription",[AuthController::class, "Vregister"]);


Route::get('/categories', [CategorieController::class, 'index']);
Route::get('/categories/ajouter', [CategorieController::class, 'store']);




Route::post("/register",[AuthController::class, "register"])->name('register');
Route::post("/connexion",[AuthController::class, "login"]);


Route::get('/dashboard', function () {
    return view('Admin.Categorie.Categorie');
});