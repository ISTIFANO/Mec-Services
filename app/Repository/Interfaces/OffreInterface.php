<?php 
namespace App\Repository\Interfaces;

use App\Models\Offre;




interface OffreInterface{


    public function create(Offre $offres);
public function delete($id);


public function update($data);
public function  show();

public function findbyOne($name);
public function findById($id);

public function getUserOffreDetails($offres,$client);
public function showRejectedOffres();
public function showActiveOffres() ;   
}
















?>