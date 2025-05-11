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
        $offres = Offre::where("id", "=", $data['id'])->first();
        if ($offres) {
            $offres->update($data->toArray());
            return $offres;
        }

        return null;
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
   
    public function getUserOffreDetails($offres,$client){


        $offres =Offre::with(['categorie', 'vehicule', 'tags'])->where("client_id","=",$client)->where("id","=",$offres)->first();

        return $offres;
        
    }
    public function showRejectedOffres(){

        $offres = Offre::with(['tags', 'categorie', 'vehicule', 'user'])->where("status","=","approved")->get();

        return $offres;
   
    }
    public function showActiveOffres(){

        $offres = Offre::with(['tags', 'categorie', 'vehicule', 'user'])->where("status","=","pending")->where("is_reserved","=",false)->paginate(7);

        return $offres;
        
    }
   public function Isreserved($offre){
   $offre->is_reserved = true;
    return $offre->save();

   }

    
}




















?>