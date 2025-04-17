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
    
    
    public function update($data,$id){

        $vehicule = Vehicule::where("id","=",$id)->updata($data);

        return $vehicule;
        
    }
    public function show()
    {
        $vehicule = Vehicule::all();

        return $vehicule;
        
    }
    
    public function findbyOne($id){

        $vehicule = Vehicule::where("id","=",$id)->first();

        return $vehicule;
        
    }




    
}




















?>