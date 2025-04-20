<?php 
namespace App\Repository\Interfaces;

use App\Models\Avis;
use App\Models\User;
use App\Models\Offre;
use App\Models\Client;



interface ServiceInterface{

    public function show();
    public function create(User $user, Client $client , Offre $offre , Avis $Avis, $data);
    
    
    public function delete($id);

    
}
















?>