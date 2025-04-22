<?php 

namespace App\Services;

interface IMechanic{


    public function create($data);

    public function update($data);
    
    public function delete($id);
    
    public function show();

    public function findByName($name);

    public function findByID($id);

    public function to_mechanicien($data);
    public function willbemechanicien();


}










?>