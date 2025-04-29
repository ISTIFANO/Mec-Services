<?php 
namespace App\Services\Implimentation;

use App\Services\IUser;
use App\Services\IService;
use App\Services\IContract;
use App\Services\IMechanic;

class ContractService implements IContract{

    private IService $iService;
    private IUser $user_service;
    private IMechanic $mechanic_service;

    public function __constract(IUser $user_service , IService $iService , IMechanic $mechanic_service){

$this->user_service = $user_service;



$this->iService = $iService;

$this->mechanic_service = $mechanic_service;
 
}
    public function create($data){
  $client =  $this->user_service->getUser($data["client_id"]);
  $mechanicien =  $this->mechanic_service->find($data["mechanicien_id"]);
  $mechanicien =  $this->user_service->getUser($data["mechanicien_id"]);



    }
    public function show(){



    }






}


























?>