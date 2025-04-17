<?php 

namespace App\Repository;

use App\Models\Categorie;
use App\Models\Offre;
use App\Models\Tag;
use App\Models\User;
use App\Models\Vehicule;
use App\Repository\Interfaces\OffreInterface;


class OffreRepository implements OffreInterface{


    public function create(Categorie $categorie , Tag $tag , User $user , Vehicule $vehicule , $data){

        $offres = new Offre();
        $offres->titre = $data["titre"];
        $offres->description = $data["description"];
        $offres->budjet = $data["budjet"];
        $offres->duree = $data["duree"];
        $offres->image = $data["image"];
        $offres->categorie()->associate($categorie);
        $offres->vehicule()->associate($vehicule);
        $offres->user()->associate($user);
        $offres->tags()->attach($tag);
        $offres->save();        
    }
    public function delete($id){

        Offre::where("id","=",$id)->delete();

        return true;
        
    }
    
    
    public function update($data , $id){

        $offres = Offre::where("id","=",$id)->update($data);

        return $offres;

        
    }
    public function  afficher(){

        $offres = Offre::all();

        return $offres;
        
    }
    
    public function findbyOne($name){


        $offres = Offre::where("id","=",$name)->first();

        return $offres;
        
    }


    
}




















?>