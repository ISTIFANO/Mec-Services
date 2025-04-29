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



    }






}


























?>