<?php 

namespace App\Repository;

use App\Models\Categorie;
use App\Repository\Interfaces\CategorieInterface;
use App\Enums\Vehicule;

class CategorieRepository implements CategorieInterface{

    public function show()
    {
        $Categorie = Categorie::all();

        return $Categorie;
    }
    public function create(Categorie $data){
        $Categorie = $data->save();
    
    return $Categorie;
    }

    public function delete($id)
    {
       Categorie::where('id', '=', $id)->delete();

        return true;
    }
    public function update($data)
    {
        $categorie =  Categorie::where('id', '=', $data['id'])->first();

        
       $categorie->update($data);
       
        return $data;
    }
    public function  FindByName($name){
        $Categorie =  Categorie::where('name', '=', $name)->first();

        return $Categorie;
    }
    public function  findByOne($id){
        $Categorie =  Categorie::where('id', '=', $id)->first();

        return $Categorie;
    }





    
}
























    





















?>