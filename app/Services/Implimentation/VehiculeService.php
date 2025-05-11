<?php


namespace App\Services\Implimentation;

use App\Models\Vehicule;
use App\Repository\Interfaces\VehiculeInterface;
use App\Services\IUser;
use App\Services\IVehiculeService;

class VehiculeService implements IVehiculeService
{

    private VehiculeInterface $vehicule_repositery;
    private IUser $user_service;

    public function __construct(VehiculeInterface $vehicule_repositery, IUser $user_service)
    {
        $this->vehicule_repositery = $vehicule_repositery;
        $this->user_service = $user_service;
    }


    
    public function create( $data)
    {
       
    
        $vehiculeModel = new Vehicule();
        $vehiculeModel->name = $data['name'];
        $vehiculeModel->model = $data['model'];
        $vehiculeModel->annee_fabrication = $data['annee_fabrication'];
        $vehiculeModel->year = $data['year'];
    
        if ($data['image'] instanceof \Illuminate\Http\UploadedFile) {
            $path = $data['image']->store('images/vehicules', 'public');
            $vehiculeModel->image = $path;
        } else {
            throw new \InvalidArgumentException('Invalid image file.');
        }
            $user = $this->user_service->findByEmail($data['email']);
        if (!$user) {
            throw new \RuntimeException('User not found.');
        }
        $vehiculeModel->user()->associate($user);
    
        return $this->vehicule_repositery->create($vehiculeModel);
    }

    public function update($data)
    {
        return $this->vehicule_repositery->update($data);
    }

    public function delete($id)
    {
        return $this->vehicule_repositery->delete($id);
    }
    public function show()
    {
        return $this->vehicule_repositery->show();
    }
    public function findbyName($name)
    {
        return $this->vehicule_repositery->findbyName($name);
    }
    public function findByOne($name)
    {
        return $this->vehicule_repositery->findByOne($name);
    }
    public function GetUserVehicule($user_id)
    {
        return $this->vehicule_repositery->GetUserVehicule($user_id);
    }
}
