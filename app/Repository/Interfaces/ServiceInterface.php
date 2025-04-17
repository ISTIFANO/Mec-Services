<?php 
namespace App\Repository\Interfaces;



interface ServiceInterface{

    public function show();
    public function create($data);
    
    
    public function delete($id);
    public function update($data,$id);

    
}
















?>