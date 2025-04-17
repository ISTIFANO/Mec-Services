<?php 
namespace App\Repository\Interfaces;



interface CategorieInterface{


public function show();
public function create($data);


public function delete($id);
public function update($data,$id);


    
}
















?>