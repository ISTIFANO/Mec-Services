<?php 
namespace App\Repository\Interfaces;



interface UserInterface{



    public function create($data,$role);
public function delete($id);


public function update($data,$id);
public function     show();

public function findbyOne($name);
public function findByFields($email);

}


?>