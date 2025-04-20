<?php 
namespace App\Repository\Interfaces;

use App\Models\Tag;

interface TagInterface{


    public function show();
    public function create(Tag $data);
    
    
    public function delete($id);
    public function update($data);
    
}
















?>