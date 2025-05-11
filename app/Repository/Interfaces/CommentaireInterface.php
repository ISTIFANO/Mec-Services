<?php 
namespace App\Repository\Interfaces;



interface CommentaireInterface{



    public function show();
public function create($date);
public function update($date,$id);
public function delete($id);
}
















?>