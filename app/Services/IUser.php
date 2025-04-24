<?php 

namespace App\Services;


interface IUser{


    public function create($data,$role);
    public function store($data);
    public function update($data,$id);
    public function delete($id);
    public function show();
    public function findByFields($name);
    public function findByEmail($email);

    public function FindClient();
    public function getUser($data);
    public function SaveMechanicien($user,$data);
    public function become_mechanicien($data);
    
    public function willbemechanicien();
    public function getVehicules($id);
    public function changrRole($user , $role);






}

























?>