<?php 
namespace App\Repository\Interfaces;



interface RoleInterface{

public function create($date);


public function update($date,$id);

public function FindByName($name);

public function show();
public function become_mechanicien();
public function sendPermissionForMechanic($data);


}
















?>