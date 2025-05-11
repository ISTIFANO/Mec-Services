<?php 

namespace App\Repository;

use App\Models\Position;
use App\Repository\Interfaces\PositionInterface;



class PositionRepositery implements PositionInterface{




    public function create($data){

        $Position = new Position();
        $Position->zipcode = $data["zipcode"];
        $Position->ville = $data["ville"];
        $Position->save();
        
    }
    public function delete($id){

        

        Position::where("id","=",$id)->delete();

        return true;

        
    }
    
    
    public function update($data , $id){


        $Position = Position::where("id","=",$id)->updata($data);

        return $Position;
        
    }
    public function show(){

        $Position = Position::all();

return $Position;

        
    }
    
    public function findbyOne($name){

        $Position = Position::where("ville","=","$name");

        return $Position;

        
    }




    
}




















?>