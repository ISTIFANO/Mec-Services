<?php 
namespace App\Services\Implimentation;

use App\Enums\Image;
use App\Models\Contract;
use App\Repository\Interfaces\ContracInterface;
use App\Services\IUser;
use App\Services\IService;
use App\Services\IContract;
use App\Services\IMechanic;
use PSpell\Config;
use Barryvdh\DomPDF\PDF;

class ContractService implements IContract{
 
    private IService $iService;
    private IUser $user_service;
    private IMechanic $mechanic_service;
    private ContracInterface $contract_repositery;

    public function __constract(IUser $user_service , IService $iService , IMechanic $mechanic_service,ContracInterface $contract_repositery){

$this->user_service = $user_service;

$this->contract_repositery = $contract_repositery;


$this->iService = $iService;

$this->mechanic_service = $mechanic_service;
 
}
    public function create($data){
  $client =  $this->user_service->getUser($data["client_id"]);
  $mechanicien =  $this->mechanic_service->findByID($data["mechanicien_id"]);
  $service =  $this->iService->showOne($data["mechanicien_id"]);
  $contract = new Contract();
$contract->titre = $data["titre"];
$contract->logo = Image::LOGO;
$contract->service()->associate($service);
$contract->mechanicien()->associate($mechanicien);
$contract->client()->associate($client);

return $this->contract_repositery->create($contract);

    }
    public function show(){
return $this->contract_repositery->show();
    }

public function find($id){
  return $this->contract_repositery->findByID($id);
}


public function generatePDF($data)
{
    $contract = $this->contract_repositery->findByID($data);
    $pdf = app('dompdf.wrapper');
    $pdf->loadView('Client.PDF.contract', [
        'title' => 'AlMechanicien Contract',
        'mechanicien' => $contract->service->mechanicien->user->firstname,
        'client' => $contract->service->client->firstname,
        'service_titre' => $contract->service->titre,
        'vehicule_image' => $contract->service->offre->vehicule->image,
        'description' => $contract->service->offre->description,
        'rule' => " text",
        'logo' => Image::LOGO,
        'tampon' => asset("/images/img/tampon.png"),
        'footer' => 'by <a href="AlMechanicien">AlMechanicien.ma</a>'
    ]);
    
    return $pdf; 
}

}
























?>