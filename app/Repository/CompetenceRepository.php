<?php 

namespace App\Repository;

use App\Models\Competence;
use App\Repository\Interfaces\CompetenceInterface;


class CompetenceRepository implements CompetenceInterface{




    public function create(Competence $data){

        $Competence = $data->save();

        return $Competence;
        
    }
    public function delete($id){



        Competence::where("id","=",$id)->delete();

        return true;
        
    }
    
    
public function update($data){

    $competence = Competence::where("id", "=", $data['id'])->first();

    $competence->update($data);

    return $competence;
    
}
    public function show(){

        $Competence = Competence::all();

        return $Competence;
        
    }
    
    public function findbyOne($name){

        $Competence = Competence::where("name","like","%$name%");

        return $Competence;
        
    }




    
}




















?>