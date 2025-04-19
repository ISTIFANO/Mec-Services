<?php

namespace App\Services\Implimentation;

use App\Enums\Vehicule;
use App\Models\Categorie;
use App\Services\ICategorie;
use App\Repository\Interfaces\CategorieInterface;

class CategorieService implements ICategorie
{
    private CategorieInterface $categorie_repositerie;

    public function __construct(CategorieInterface $categorie_repositerie)
    {
        $this->categorie_repositerie = $categorie_repositerie;
    }

    public function create($data)
    {
        $categorieModel = new Categorie();
        $categorieModel->name = $data["name"];
        $categorieModel->description = $data["description"];
        $categorieModel->image = $data["image"] ? Vehicule::Car : null;

        return $this->categorie_repositerie->create($categorieModel);
    }

    public function update($data)
    {
        return $data; 
    }

    public function delete($id)
    {
        return true; 
    }
    public function show()
    {
        return $this->categorie_repositerie->show();
    }
}
