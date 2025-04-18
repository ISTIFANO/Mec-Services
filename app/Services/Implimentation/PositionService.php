<?php 


namespace App\Services\Implimentation;

use App\Repository\Interfaces\PositionInterface;
use App\Services\IPosition;

class PositionService implements IPosition {

    protected $positionRepository;
public function __construct(PositionInterface $positionRepository)
{
    $this->positionRepository = $positionRepository;
}



    public function create($data){

      $data =   $this->positionRepository->create($data);


        return $data;
    }
    public function update($data){

        $data =   $this->positionRepository->update($data ,$data['id']);

        return $data;
    }
    public function delete($id){

        $data =   $this->positionRepository->delete($id);
        return $data;

    }
    public function show(){

        $data =   $this->positionRepository->show();
        return $data;

        return;
    }
}











?>