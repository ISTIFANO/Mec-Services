<?php 

namespace App\Repository;

use App\Models\Vehicule;
use App\Repository\Interfaces\VehiculeInterface;


class VehiculeRepository implements VehiculeInterface{




    public function create($date){

        $vehicule = new Vehicule();
        $vehicule->name = $date["name"];
        $vehicule->model = $date["model"];
        $vehicule->brand = $date["brand"];
        $vehicule->year = $date["year"];

        $vehicule->save();

    }
    public function delete($id){

     Vehicule::where("id","=",$id)->delete();

        return true;

        
    }
    
    
    public function update($data){

        $vehicule = Vehicule::where("id","=",$data["id"])->first();
        $vehicule->updata($data);

        return $vehicule;
        
    }
    public function show()
    {
        $vehicule = Vehicule::all();

        return $vehicule;
        
    }
    
    public function findbyName($name){

        $vehicule = Vehicule::where("name","=",$name)->first();

        return $vehicule;
        
    }




    
}




















?>