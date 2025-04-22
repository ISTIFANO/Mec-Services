<?php 


namespace App\Services;


interface ICategorie {



    public function create($data);

    public function update($data);
    
    public function delete($id);
    
    public function show();

    public function FindByName($data);
    public function FindByOne($data);



}











?>