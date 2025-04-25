<?php

namespace App\Services\Implimentation;

use App\Models\User;
use App\Services\IUser;
use App\Models\Mechanic;
use App\Repository\Interfaces\MechanicInterface;
use App\Services\IMechanic;

use App\Services\IRole;

class MechanicService implements IMechanic
{
    private IRole $role_service;
    private MechanicInterface $user_repositery;


    public function __construct(IRole $role_service, MechanicInterface $user_repositery)
    {
        $this->role_service = $role_service;
        $this->user_repositery = $user_repositery;

    }
    public function create($user, $role)
    {
        // $mechanicien = new Mechanic();
        // $mechanicien->certificat = $data['certificat'] ;
        // $mechanicien->experience_years = null ;
        // $mechanicien->specialization = null ;
        // $mechanicien->variable_at = null ;
        // $mechanicien->is_active = false ;
        // $mechanicien->user()->assciate($user);
        // $mechanicien->user()->assciate();


    }


    public function store($data)
    {
        $user = User::find($data['user_id']);
        $avis = User::find(1);
        $mechanicien = new Mechanic();
        $mechanicien->certificat = $data['certificat']->store('certificates', 'public'); 
        $mechanicien->experience_years = $data['experience_years'];
        $mechanicien->specialization = $data['specialization'];
        $mechanicien->variable_at = $data['variable_at']; 
        $mechanicien->variable_to = $data['variable_to']; 
        $mechanicien->is_active = false;


        
        $mechanicien->user()->associate($user);
        $mechanicien->avis()->associate($avis);


        
       return  $mechanicien->save();
        

    }
    public function update($data) {

    }

    public function validateMechanicien($data) {

      return $this->user_repositery->validate($data);
    }

    public function delete($id) {}

    public function show() {}

    public function findByName($name) {}

    public function findByID($id) {}

    public function to_mechanicien($data)
    {

        $data = array_merge($data, ["status" => true]);

        $mechanicien = $this->role_service->sendPermissionForMechanic($data);

        return $mechanicien;
    }

    public function willbemechanicien()
    {

    return $this->role_service->become_mechanicien();
    }

    public function mechanicienInfo($id)
    {
    return  Mechanic::where("user_id","=",$id)->first();
    }
}
