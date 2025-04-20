<?php

namespace App\Repository;

use App\Models\Avis;
use App\Models\Client;
use App\Models\Offre;
use App\Models\Service;
use App\Models\User;
use App\Repository\Interfaces\ServiceInterface;



class ServiceRepository implements ServiceInterface
{




    public function create(User $user, Client $client, Offre $offre, Avis $Avis, $data)
    {

        $service = new Service();
        $service->titre = $data["titre"];
        $service->duree = $data["duree"];
        $service->prix = $data["prix"];
        $service->status = $data['status'];
        $service->client->associate($client);
        $service->offre->associate($offre);
        $service->Avis->associate($Avis);

        $service->save();

        return  $service;
    }
    public function delete($id)
    {

        Service::find($id)->delete();

        return true;
    }


    public function  show()
    {

        $service =  Service::all();

        return $service;
    }

    public function findbyOne($name)
    {

        $service =  Service::where("titre", "=", $name);
        return $service;
    }
}
