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

        $service= Service::where('client_id', Auth::user()->id)
        ->orderBy('offer_id')
        ->orderByDesc('id')
        ->get()
        ->unique('offer_id');
        return $service;
    }
    public function ChangeStatus($data)
    {
        $service = Service::where("id", "=", $data["service_id"])->first();
        if ($service) {
            $service->status = $data["status"];
            $service->save();
        }
        return $service;
    }
    public function findbyOne($name)
    {

        $service =  Service::where("titre", "=", $name)->first();
        return $service;
    }
    public function findService($id)
    {

        $service = Service::with([
            'mechanicien.user', 
            'offre.categorie', 
            'offre.vehicule', 
            'offre.tags','user'
        ])->where("id", "=", $id)->first();
        return $service;
    }
    public function showForMechanicien($id)
    {

        $service = Service::with([
            'mechanicien.user', 
            'offre.categorie', 
            'offre.vehicule', 
            'offre.tags','user'
        ])->where("mechanicien_id", "=", $id)->get();
        return $service;
    }

    public function showAll()
    {

        $service = Service::with([
            'mechanicien.user', 
            'offre.categorie', 
            'offre.vehicule', 
            'offre.tags','user'
        ])->get();
        return $service;
    }

    public function showOne($id)
    {
        $service = Service::with([
            'mechanicien.user', 
            'offre.categorie', 
            'offre.vehicule', 
            'offre.tags','user'
        ])->where('client_id', Auth::id())
          ->findOrFail($id)->first();



          return $service;
        
        }
        public function showMechanicien($id){
            $service = Service::with([
                'mechanicien.user'
            ])->where('offer_id', $id)->get();
    
            $mechanics =  $service->pluck('mechanicien')->unique('id')->values();
              return $mechanics;
            
            }

            public function ApprouveService($id){
                $service = Service::where('id', $id)->first();
        
                $mechanics =  $service->pluck('mechanicien')->unique('id')->values();
                  return $mechanics;
                
                }  
                public function getMechanicienSFromService($id){
                    $service = Service::where('offer_id', $id)->where('status', 'postulee')->get();
                    return $service;
                    
                    }  
                    public function remove_Mechanicien_From_Service($data,$offre){
                        $service = Service::where('offer_id', $offre)->where('mechanicien_id', $data["mechanic_id"])->delete();
                        return $service;
                        
                        }  
        
}
