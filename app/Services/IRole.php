<?php 

namespace App\Services;


interface IRole{


    public function create($data);
    public function update($data);
    public function delete($id);
    public function show();
    public function FindByName($data);
    public function become_mechanicien();
    public function sendPermissionForMechanic($data);










}

























?>