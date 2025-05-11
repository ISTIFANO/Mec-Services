<?php 
namespace App\Repository\Interfaces;

use App\Models\Competence;



interface CompetenceInterface{



    public function show();
public function create(Competence $date);


public function update($date);
public function delete($id);
public function findByName($name);
public function findByID($id);



}
















?>