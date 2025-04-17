<?php 
namespace App\Repository\Interfaces;

use App\Models\Tag;
use App\Models\User;
use App\Models\Vehicule;
use App\Models\Categorie;



interface OffreInterface{


public function create(Categorie $categorie , Tag $tag , User $user , Vehicule $vehicule , $data);
public function delete($id);


public function update($data , $id);
public function     afficher();

public function findbyOne($name);

    
}
















?>