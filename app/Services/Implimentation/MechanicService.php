<?php

namespace App\Services\Implimentation;

use App\Repository\Interfaces\UserInterface;
use IMechanic;

class MechanicService implements IMechanic
{
    private UserInterface $user_repositery;
    private IMechanic $mechanicien_service;


    public function __construct(IMechanic $mechanicien_service,UserInterface $user_repositery)
    {
        $this->mechanicien_service = $mechanicien_service;
        $this->user_repositery = $user_repositery;

    }
    public function create($data){

    }

    public function update($data){


    }
    
    public function delete($id){


    }
    
    public function show(){


    }

    public function findByName($name){


    }

    public function findByID($id){


    }

    public function to_mechanicien($data){

        $data = array_merge($data, ["status" => true]); 

        $mechanicien = $this->user_repositery->become_mechanicien($data);

return $mechanicien;

    }
    public function willbemechanicien(){

return $this->mechanicien_service->willbemechanicien();

    }
















}