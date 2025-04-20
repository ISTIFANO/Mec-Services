<?php

use App\Enums\Vehicule;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CompetenceController;

Route::get('/', function () {
    return view('pages.register');
});

Route::prefix("admin")->group(function ()  {
    Route::get('/categorie', [CategorieController::class, 'index'])->name('categorie');
    Route::post('/categorie', [CategorieController::class, 'create'])->name('admin.category.store');
    Route::delete('/categorie', [CategorieController::class, 'delete'])->name('admin.category.destroy');
    Route::put('/categorie', [CategorieController::class, 'update'])->name('admin.category.update');
    Route::get('/competences', [CompetenceController::class, 'index']);
    Route::post('/competence', [CompetenceController::class, 'store'])->name('admin.competence.store');
    Route::delete('/competence', [CompetenceController::class, 'delete'])->name('admin.competence.destroy');
    Route::put('/competence', [CompetenceController::class, 'update'])->name('admin.competence.update');
    Route::get('/tag', [TagController::class, 'index']);
    Route::post('/tag', [TagController::class, 'store'])->name('admin.tag.store');
    Route::delete('/tag', [TagController::class, 'delete'])->name('admin.tag.destroy');
    Route::put('/tag', [TagController::class, 'update'])->name('admin.tag.update');
    Route::get('/vehicule', [VehiculeController::class, 'index']);
    Route::post('/vehicule', [VehiculeController::class, 'store'])->name('admin.vehicule.store');
    Route::delete('/vehicule', [VehiculeController::class, 'delete'])->name('admin.vehicule.destroy');
    Route::put('/vehicule', [VehiculeController::class, 'update'])->name('admin.vehicule.update');



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