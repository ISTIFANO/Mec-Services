<?php 
namespace App\Repository\Interfaces;

use App\Models\User;

interface UserInterface{



    public function create( User $data);
public function delete($id);


public function update($data,$id);
public function     show();

public function findbyOne($name);
public function findByFields($email);
public function findByEmail($email);
public function FindClient();
public function getUser($data);





}


?>