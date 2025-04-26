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




    public function create($service)
    {
        return   $service->save();

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

        $service =  Service::where("titre", "=", $name)->first();
        return $service;
    }
    public function findService($id)
    {

        $service =  Service::where("id", "=", $id);
        return $service;
    }
}
