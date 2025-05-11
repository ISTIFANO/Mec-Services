<?php 

namespace App\Repository;

use App\Models\Vehicule;
use App\Repository\Interfaces\VehiculeInterface;


class VehiculeRepository implements VehiculeInterface{




    public function create(Vehicule $date){

      return $date->save();

    }
    public function delete($id){

     Vehicule::where("id","=",$id)->delete();

        return true;

        
    }
    
    
    public function update($data){
        $vehicule = Vehicule::where("id","=",$data["vehicle_id"])->first();
        $vehicule->year = $data["year"];
        $vehicule->annee_fabrication = $data["annee_fabrication"];
        $vehicule->name = $data["name"];
        $vehicule->model = $data["model"];
        $vehicule->image = isset($data["image"]) ? $data["image"]->store('images/vehicules', 'public') : null;        $vehicule->save();
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
    public function findByOne($id){

        $vehicule = Vehicule::find($id);

        return $vehicule;
        
    }

    public function GetUserVehicule($id){

        $vehicule = Vehicule::where("user_id","=",$id)->first();

        return $vehicule;
       
    }




    
}




















?>