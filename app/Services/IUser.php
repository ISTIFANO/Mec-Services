<?php 

namespace App\Services;


interface IUser{


    public function create($data,$role);
    public function update($data,$id);
    public function delete($id);
    public function show();
    public function findByFields($email);

}

























?>