<?php

namespace App\Services\Implimentation;

use App\Services\IMechanic;
use App\Repository\Interfaces\UserInterface;
use App\Services\IUser;

class MechanicService implements IMechanic
{
    private IUser $user_service;
    // private IMechanic $mechanicien_service;
    

    public function __construct( IUser $user_service)
    {
        // $this->mechanicien_service = $mechanicien_service;
        $this->user_service = $user_service;
    }
    public function create($data) {


    }

    public function update($data) {


    }

    public function delete($id) {


    }

    public function show() {


    }

    public function findByName($name) {


    }

    public function findByID($id) {


    }

    public function to_mechanicien($data)
    {

        $data = array_merge($data, ["status" => true]);

// dd($data);
        $mechanicien = $this->user_service->become_mechanicien($data);

        return $mechanicien;
    }

    public function willbemechanicien()
    {

        return $this->user_service->willbemechanicien();
    }
}
