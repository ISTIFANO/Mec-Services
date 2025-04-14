<?php

use App\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Admin.Categorie');
});


Route::get('/Categorie', [CategorieController::class, 'index']);
