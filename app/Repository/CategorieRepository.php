<?php 

namespace App\Repository;

use App\Models\Categorie;
use App\Repository\Interfaces\CategorieInterface;


class CategorieRepository implements CategorieInterface{



    protected Categorie $Categorie;
    public function __construct()
    {
        $this->Categorie = new Categorie();

        
    }

    public function show()
    {
        $Categorie = $this->Categorie->all();

        return $Categorie;
    }

    public function delete($id)
    {

        $this->Categorie->where('id', '=', $id)->delete();

        return true;
    }
    public function update($data, $id)
    {
        $data =  $this->Categorie->where('id', '=', $id)->update($data);

        return $data;
    }
    public function  findbyid($id){
        $Categorie =  $this->Categorie->where('id', '=', $id)->first();

        return $Categorie;
    }





    
}
























    





















?>