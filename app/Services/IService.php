<?php 

namespace App\Services;


interface IService{
    public function create($data);

    public function update($data);
 public function delete($id);
    public function show();
    public function showOne($id);
    public function showMechanicien($id);
    public function ApprouveService($id);
    public function remove_Mechanicien_From_Service($id);

}



?>