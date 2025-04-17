<?php 

namespace App\Repository;

use App\Models\Commentaire;
use App\Repository\Interfaces\CommentaireInterface;
use App\Repository\Interfaces\ntenuMechanicInterface;


class CommentaireRepository implements CommentaireInterface{




    public function create($data){

        $commentaire = new Commentaire();
        $commentaire->contenu = $data["contenu"];
        $commentaire->save();
        
    }
    public function delete($id){


        Commentaire::where("id","=",$id)->delete();

        return true;
        
    }
    
    
    public function update($data, $id){

        $commentaire = Commentaire::where("id","=",$id)->updata($data);

        return $commentaire;
        
    }
    public function  show(){

$commentaire = Commentaire::all();

return $commentaire;
        
    }
    
    public function findbyOne($keyword){


        $commentaire = Commentaire::where("contenu","like","%$keyword%");

        return $commentaire;
        
    }




    
}




















?>