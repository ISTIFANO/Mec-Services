<?php 

namespace App\Services;


interface IUser{


    public function create($data);
    public function update($data);
    public function delete($id);
    public function show();
    public function findByFields($email);

}

























?>