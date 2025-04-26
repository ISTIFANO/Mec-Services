<?php

namespace App\Repository;

use App\Models\Avis;
use App\Models\User;
use App\Models\Offre;
use App\Models\Client;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
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

        $service = Service::with(['mechanicien.user', 'offre.categorie', 'offre.tags'])->where('client_id', Auth::id())->get();

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

    public function showOne($id)
    {
        $service = Service::with([
            'mechanicien.user', 
            'offre.categorie', 
            'offre.vehicule', 
            'offre.tags'
        ])->where('client_id', Auth::id())
          ->findOrFail($id)->first();
          return $service;
        
        }
        
}
