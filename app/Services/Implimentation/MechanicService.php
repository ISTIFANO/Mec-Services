<?php

namespace App\Services\Implimentation;

use App\Models\User;
use App\Services\IUser;
use App\Models\Mechanic;
use App\Services\IMechanic;
use App\Repository\Interfaces\UserInterface;

class MechanicService implements IMechanic
{
    // private IUser $user_service;
    // private IMechanic $mechanicien_service;


    // public function __construct(IUser $user_service)
    // {
    //     // $this->mechanicien_service = $mechanicien_service;
    //     $this->user_service = $user_service;
    // }
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


        
        $mechanicien->save();
        
        dd($mechanicien);

    }
    public function update($data) {

    }

    public function delete($id) {}

    public function show() {}

    public function findByName($name) {}

    public function findByID($id) {}

    public function to_mechanicien($data)
    {

        // $data = array_merge($data, ["status" => true]);

        // // dd($data);
        // $mechanicien = $this->user_service->become_mechanicien($data);

        // return $mechanicien;
    }

    public function willbemechanicien()
    {

    // return $this->user_service->willbemechanicien();
    }
}
