<?php 

namespace App\Repository\Interfaces;

interface PositionInterface{
    





    public function show();
    public function create($data);
    
    
    public function delete($id);
    public function update($data, $id);

}

?>