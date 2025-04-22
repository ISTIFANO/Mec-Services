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
        $categorieModel->nom = $data['nom'];

        $categorieModel->description = $data['description'];

        if (isset($data['image']) && $data['image']->isValid()) {

            $path = $data['image']->store('images/categories', 'public');

            $categorieModel->image = $path;
        } else {
            $categorieModel->image = Vehicule::Car;
        }
      
        
        return $this->categorie_repositerie->create($categorieModel);
    }

    public function update($data)
    {

        return $this->categorie_repositerie->update($data); 
    }

    public function delete($id)
    {
        return $this->categorie_repositerie->delete($id); 
    }
    public function show()
    {
        return $this->categorie_repositerie->show();
    }

    public function FindByName($name)
    {
        return $this->categorie_repositerie->FindByName($name);
    }
    public function findByOne($name)
    {
        return $this->categorie_repositerie->findByOne($name);
    }
}

