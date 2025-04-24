<?php 
namespace App\Repository\Interfaces;



interface RoleInterface{

public function create($date);


public function update($date,$id);

public function FindByName($name);

public function show();

}
















?>