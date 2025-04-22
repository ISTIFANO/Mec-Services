<?php

namespace App\Services;

interface IVehiculeService
{
    public function create($data);

    public function update($data);
    
    public function delete($id);
    
    public function show();
    public function findbyName($name);
    public function findByOne($name);


}