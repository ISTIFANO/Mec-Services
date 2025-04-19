<?php 
namespace App\Repository\Interfaces;

use App\Models\Categorie;



interface CategorieInterface{


public function show();
public function create(Categorie $data);


public function delete($id);

public function update($data);


    
}
















?>