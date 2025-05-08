<?php

namespace App\Services\Implimentation;

use Exception;
use App\Enums\Statut;
use App\Models\Service;
use App\Services\IUser;
use App\Services\IOffre;
use App\Services\IService;
use App\Services\IContract;
use App\Services\IMechanic;
use Illuminate\Support\Facades\DB;
use App\Repository\Interfaces\UserInterface;
use App\Repository\Interfaces\ServiceInterface;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class S_Service implements IService
{
    protected ServiceInterface $service_repositery;
    protected IMechanic $mechanicien_service;
    protected IOffre $offres_services;
    protected IUser $user_services;
    protected IContract $iContract;


    public function __construct(ServiceInterface $service_repositery, IContract $iContract, IMechanic $mechanicien_service, IOffre $offres_services, IUser $user_services)
    {
        $this->service_repositery = $service_repositery;
        $this->mechanicien_service = $mechanicien_service;
        $this->offres_services = $offres_services;
        $this->user_services = $user_services;
        $this->iContract = $iContract;
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
            $service->status = Statut::POSTULE;
            $service->user()->associate($client);
            $service->offre()->associate($offres);
            $service->mechanicien()->associate($mechanicien);
            return $this->service_repositery->create($service);
        } catch (Exception $e) {
            throw new Exception("probleme de creation  service: " . $e->getMessage());
        }
    }
    public function update($data) {}
    public function delete($id) {

        return $this->service_repositery->delete($id);
    }
    public function show()
    {
        return $this->service_repositery->show();
    }
    public function showAll()
    {
        return $this->service_repositery->showAll();
    }
    public function showOne($id)
    {
        return $this->service_repositery->showOne($id);
    }
    public function showForMechanicien()
    {
        $mechanicien = $this->mechanicien_service->findByID(Auth::user()->id);
        return $this->service_repositery->showForMechanicien( $mechanicien->id);
    }
    public function ValidateService($data) {}
    public function showMechanicien($data)
    {
        return $this->service_repositery->showMechanicien($data);
    }
    public function findService($id)
    {
        return $this->service_repositery->findService($id);
    }
    public function ChangeStatus($data) {

        return $this->service_repositery->ChangeStatus($data);
    }

    public function ApprouveService($data)
    {

        try {
            DB::beginTransaction();
            $service = $this->service_repositery->findService($data);
            if (!$service) {
                throw new Exception("Service not found");
            }

            $service->status = Statut::EN_COURS;
            $this->service_repositery->create($service);

            $mechaniciens = $this->service_repositery->getMechanicienSFromService($service->offer_id);

            foreach ($mechaniciens as $mechanicien) {

                $this->service_repositery->delete($mechanicien->id);
            }
            $offredeservice =   $this->offres_services->findById($service->offer_id);
            if (!$offredeservice) {
                throw new NotFoundHttpException("Offre not found ");
            } else {
                $this->offres_services->Isreserved($offredeservice);
            }
            $this->iContract->create($service);
            DB::commit();
            return $service;
        } catch (Exception $e) {
            DB::rollBack();
            throw new Exception("Error approving service: " . $e->getMessage());
        }
    }

    public function remove_Mechanicien_From_Service($data) {
        $service = $this->findService($data["serviceId"]);
$offre = $service->offer_id;
        return $this->service_repositery->remove_Mechanicien_From_Service($data,$offre);


    }
}
