<?php  


namespace App\Services\Implimentation;

use App\Models\Vehicule;
use App\Repository\Interfaces\VehiculeInterface;
use App\Services\IVehiculeService;

class VehiculeService implements IVehiculeService {

    private VehiculeInterface $vehicule_repositery;

    public function __construct(VehiculeInterface $vehicule_repositery)
    {
        $this->vehicule_repositery = $vehicule_repositery;
    }

    public function create($data)
    {
        $vehiculeModel = new Vehicule();
        $vehiculeModel->name = $data['name'];
        $vehiculeModel->model = $data['model'];
        $vehiculeModel->annee_fabrication = $data['annee_fabrication'];
        $vehiculeModel->year = $data['year'];

        $path = $data['image']->store('images/vehicules', 'public');

        $vehiculeModel->image = $path;


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
    public function findbyName($name){
        return $this->vehicule_repositery->findbyName($name);

    }
}




?>