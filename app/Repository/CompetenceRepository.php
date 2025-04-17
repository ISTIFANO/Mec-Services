<?php 

namespace App\Repository;

use App\Models\Competence;
use App\Repository\Interfaces\CompetenceInterface;


class CompetenceRepository implements CompetenceInterface{




    public function create($data){

        $Competence = new Competence();
        $Competence->name = $data["name"];
        $Competence->icon = $data["icon"];
        $Competence->save();
        
    }
    public function delete($id){



        Competence::where("id","=",$id)->delete();

        return true;
        
    }
    
    
    public function update($data, $id){


        $Competence = Competence::where("id","=",$id)->updata($data);

        return $Competence;
        
    }
    public function show(){

        $Competence = Competence::all();

        return $Competence;
        
    }
    
    public function findbyOne($name){

        $Competence = Competence::where("contenu","like","%$name%");

        return $Competence;
        
    }




    
}




















?>