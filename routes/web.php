<?php

use App\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Admin.Categorie');
});


Route::get('/categories', [CategorieController::class, 'index']);
Route::get('/categories/ajouter', [CategorieController::class, 'store']);
// Route::get('/Categorie', [CategorieController::class, 'index']);
// Route::get('/Categorie', [CategorieController::class, 'index']);
// Route::get('/Categorie', [CategorieController::class, 'index']);

