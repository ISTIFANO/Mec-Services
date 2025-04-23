<?php 


namespace App\Services;



interface IOffre{


    public function create($data);
    public function update($data);
    public function delete($id);
    public function show();
    public function getUserOffreDetails($offres);



}











?>