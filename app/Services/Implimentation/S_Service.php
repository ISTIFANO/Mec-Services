<?php

namespace App\Services\Implimentation;

use App\Enums\Statut;
use App\Models\Service;
use Exception;
use App\Services\IOffre;
use App\Services\IService;
use App\Services\IMechanic;
use App\Repository\Interfaces\UserInterface;
use App\Repository\Interfaces\ServiceInterface;
use App\Services\IUser;

class S_Service implements IService
{
    protected ServiceInterface $service_repositery;
    protected IMechanic $mechanicien_service;
    protected IOffre $offres_services;
    protected IUser $user_services;


    public function __construct(ServiceInterface $service_repositery, IMechanic $mechanicien_service, IOffre $offres_services, IUser $user_services)
    {
        $this->service_repositery = $service_repositery;
        $this->mechanicien_service = $mechanicien_service;
        $this->offres_services = $offres_services;
        $this->user_services = $user_services;
    }

  

    public function create($data)
    {
        try {
            $mechanicien = $this->mechanicien_service->is_mechanicien($data["mechanicien_id"]);
            
            if (!$mechanicien) {
                throw new Exception("You are not a mechanicien");
            }

            $client = $this->user_services->getUser($data["client_id"]);
            $offres = $this->offres_services->findById($data["offre_id"]);

            $service = new Service();
            $service->titre = $offres->titre;
            $service->status = Statut::EN_COURS;
            $service->user()->associate($client);
            $service->offre()->associate($offres);
            $service->mechanicien()->associate($mechanicien);

            return $this->service_repositery->create($service);
        } catch (Exception $e) {
            throw new Exception("probleme de creation  service: " . $e->getMessage());
        }
    }
    public function update($data) {

    }
    public function delete($id) {

    }
    public function show() {
        return $this->service_repositery->show();

    }
    public function showOne($id) {
        return $this->service_repositery->showOne($id);

    }
}
