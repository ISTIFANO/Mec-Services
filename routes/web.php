<?php

use App\Enums\Vehicule;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OffreController;
use App\Http\Controllers\MechanicController;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CompetenceController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServiceController;
use App\Models\Role;
use App\Models\Service;

Route::get('/ThankYou', function () {
    return view('Pages.mechanicien');

    
});
Route::get('/BecomeFreelancer', function () {
    return view('Client.BecomeFreelancer');
});


  

Route::get('/lo', function () {
    return view('Admin.Utilisateur.ValidateMechanicien');
});
Route::get('/AjouterVehicule', function () {
    return view('Admin.Vehicule.ClientVehicule');
});
Route::get('/MesVehicule', function () {
    return view('Admin.Vehicule.MesVehicule');
});

Route::get('/Services', function () {
    return view('Admin.Service.Service');
});
Route::get('/Offre', function () {
    return view('Admin.Offre.Detailes');
});

Route::get('/chat', function () {
    return view('Admin.Service.Chat');
});

Route::get('/Adminn', function () {
    return view('Admin.Statistic.statistic');
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
    Route::get('/offre',[OffreController::class, 'index']);
    Route::post('/offre', [OffreController::class, 'store'])->name('admin.offre.store');
    Route::delete('/offre', [OffreController::class, 'delete'])->name('admin.offre.destroy');
    Route::put('/offre', [OffreController::class, 'update'])->name('admin.offre.update');
    Route::put('/role', [RoleController::class, 'Update']);
    Route::post('/mechanicienInfo', [MechanicController::class, 'mechanicienInfo']);
    Route::post('/validate', [MechanicController::class, 'validateMechanicien']);


});


Route::prefix("client")->group(function ()  {
    Route::get('/willbemechanicien', [MechanicController::class, 'willbemechanicien'])->name('willbemechanicien');
    Route::post('/vehicule', [VehiculeController::class, 'store'])->name('client.vehicles.store');
    Route::get('/ClientOffre',[OffreController::class, 'showOffre'])->name('client.offre.show');
    Route::get('/offre',[OffreController::class, 'index']);
    Route::post('/offre', [OffreController::class, 'store'])->name('client.offre.store');
    Route::delete('/offre', [OffreController::class, 'delete'])->name('client.offre.destroy');
    Route::put('/offre', [OffreController::class, 'update'])->name('client.offre.update');
    Route::post('/Detailes', [OffreController::class, 'getUserOffreDetails']);
    Route::get('/vehicule', [VehiculeController::class, 'index']);
    Route::get('/Allvehicules', [VehiculeController::class, 'getVehicules']);
    Route::post('/vehicule', [VehiculeController::class, 'store'])->name('client.vehicule.store');
    Route::delete('/vehicule', [VehiculeController::class, 'delete'])->name('client.vehicule.destroy');
    Route::delete('/deletevehicules', [VehiculeController::class, 'deletevehicules'])->name('client.deletevehicules.destroy');
    Route::put('/vehicule', [VehiculeController::class, 'update'])->name('client.vehicule.update');
    Route::post('/BecomeFreelancerMethode', [MechanicController::class, 'create']);
    Route::get('/ServiceDetails', [ServiceController::class, 'show']);
    Route::post('/Service', [ServiceController::class, 'find']);



});

Route::post('/chat', [MessageController::class, 'chat'])->name('chat');
Route::post('/chat/send', [MessageController::class, 'sendMessage']);

Route::prefix("mechanicien")->group(function ()  {
    Route::post('/OffreDetails', [OffreController::class, 'getOffreDetails']);
    Route::post('/Postuler', [ServiceController::class, 'store']);


});
Route::get('/Offres', [OffreController::class, 'showActiveOffres']);

Route::post('/tomechanicien', [MechanicController::class, 'to_mechanicien']);
Route::get('/willbemechanicien', [MechanicController::class, 'willbemechanicien']);

Route::get("/seConnect",[AuthController::class, "index"]);
Route::get("/inscription",[AuthController::class, "Vregister"]);


Route::get('/categories', [CategorieController::class, 'index']);
Route::get('/categories/ajouter', [CategorieController::class, 'store']);




Route::post("/register",[AuthController::class, "register"])->name('register');
Route::post("/deconnect",[AuthController::class, "logout"])->name('logout');

Route::post("/connexion",[AuthController::class, "login"]);


Route::get('/dashboard', function () {
    return view('Admin.Categorie.Categorie');
});


Route::get('/', function () {
    return view('welcome');
});



Route::get("/Payement",[PaymentController::class, "index"]);


