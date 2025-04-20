<?php 


namespace App\Services\Implimentation;

use App\Services\IPosition;

class PositionService implements IPosition {

    public function create($data){
        return $data;        

    }
    public function update($data){

        return $data;
    }
    public function delete($id){

        return true;
    }
    public function show(){

        return;
    }
}











?>