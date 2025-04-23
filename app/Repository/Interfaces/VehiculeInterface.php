<?php 
namespace App\Repository\Interfaces;

use App\Models\Vehicule;



interface VehiculeInterface{



    public function show();
public function create(Vehicule $date);


public function update($date);

public function delete($id);

public function findbyName($name);
public function findByOne($data);
public function GetUserVehicule($id);


}
















?>