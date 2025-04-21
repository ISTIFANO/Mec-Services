<?php 

namespace App\Repository;

use App\Models\Categorie;
use App\Models\Offre;
use App\Models\Tag;
use App\Models\User;
use App\Models\Vehicule;
use App\Repository\Interfaces\OffreInterface;


class OffreRepository implements OffreInterface{


    public function create(Offre $offres){

       return  $offres->save();        
    }
    public function delete($id){

        Offre::where("id","=",$id)->delete();

        return true;
        
    }
    
    
    public function update($data){

        $offres = Offre::where("id","=",$data['id'])->update($data);

        return $offres;

        
    }
    public function  show(){

        $offres = Offre::with(['tags', 'categorie', 'vehicule', 'user'])->get();

        return $offres;
        
        
    }
  public function findbyOne($name){

        $offres = Offre::where("id","=",$name)->first();

        return $offres;
        
    }
    public function findById($id){


        $offres = Offre::where("id","=",$id)->first();

        return $offres;
        
    }
   


    
}




















?>