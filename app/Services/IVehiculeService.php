<?php

namespace App\Services;

interface IVehiculeService
{
    public function getAllVehicules();
    public function getVehiculeById(int $id);
    public function createVehicule( $data);

    public function updateVehicule(int $id,  $data);
    public function deleteVehicule(int $id);
}