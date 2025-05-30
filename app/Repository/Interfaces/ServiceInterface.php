<?php 
namespace App\Repository\Interfaces;

use App\Models\Avis;
use App\Models\User;
use App\Models\Offre;
use App\Models\Client;
use App\Models\Service;

interface ServiceInterface{

    public function show();
    public function create(Service $service);
    public function delete($id);
    public function findService($id);
    public function showOne($id);
    public function showMechanicien($id);

    public function ApprouveService($id);
    public function showForMechanicien( $id);
    public function showAll();
    public function ChangeStatus($data);


    public function getMechanicienSFromService($id);
    public function remove_Mechanicien_From_Service($data,$offre);

    
}
















?>