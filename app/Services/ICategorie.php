<?php 


namespace App\Services;


interface ICategorie {



    public function create($data);

    public function update($data);
    
    public function delete($id);
    
    public function show();

}











?>