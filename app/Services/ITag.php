<?php 
namespace App\Services;



interface ITag{


    public function create($data);
    public function update($data);
    public function delete($id);
    public function show();
    public function findByNames($name);
    public function findByOne($data);




}

























?>