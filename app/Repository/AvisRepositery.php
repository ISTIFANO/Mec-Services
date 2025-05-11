<?php 

namespace App\Repository;

use App\Models\Avis;
use App\Repository\Interfaces\AvisInterface;


class AvisRepositery implements AvisInterface{






    public function create($data){

        $Avis = new Avis();
        $Avis->contenu = $data["contenu"];
        $Avis->save();
        
    }
    public function delete($id){


        Avis::where("id","=",$id)->delete();

        return true;
        
    }
    
    
    public function update($data, $id){

        $Avis = Avis::where("id","=",$id)->updata($data);

        return $Avis;
        
    }
    public function  show(){

$Avis = Avis::all();

return $Avis;
        
    }
    
    public function findbyOne($keyword){


        $avis = Avis::where("id","=",$keyword)->first();

        return $avis;
        
    }



    
}




















?>